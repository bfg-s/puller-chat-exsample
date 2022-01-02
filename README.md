# Instruction

#### 1. laravel new minichat
#### 2. cd minichat
#### 3. composer require laravel/jetstream
#### 4. php artisan jetstream:install livewire
#### 5. npm install
#### 6. npm run prod
#### 7. Configure ENV (Database and what you need)
#### 8. php artisan vendor:publish --tag=jetstream-views
#### 9. composer require bfg/puller-alpine bfg/ide-helper bfg/request bfg/resource
#### 10. Change composer PHP require to 8.0
#### 11. php artisan make:model Chat -m
#### 12. Add to new migration
```php
$table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
$table->text('message'); 
```
#### 13. php artisan migrate
#### 14. Add to new model
```php
protected $fillable = ['user_id', 'message'];

public function user()
{
    return $this->hasOne(User::class, 'id', 'user_id');
}
```
#### 15. php artisan make:request ChatMessageRequest
```php
public function authorize()
{
    return \Auth::check();
}

public function rules()
{
    return [
        'message' => 'required|min:2'
    ];
}

protected function transformation(array $validated): array {
    $validated['user_id'] = \Auth::id();
    return $validated;
}
```
#### 16. php artisan make:resource ChatResource
```php
protected array $map = [
    'id',
    'name',
    'message'
];

public function getNameField()
{
    return $this->resource->user->name;
}
```
#### 17. php artisan make:task ClearTextarea --alpine
```php
protected ?string $name = "chat.message";

public function handle () {
    return "";
}
```
#### 18. php artisan make:task UpdateOnlineCount --alpine
```php
protected ?string $name = "chat.online";

public function handle () {
    return \Puller::online();
}
```
#### 19. php artisan make:task UpdateChatList --alpine
```php
protected ?string $name = "chat.list";

public function handle () {
    return ChatResource::create(
        Chat::orderBy('id', 'desc')->with('user')->paginate()
    );
}
```
#### 20. Create events in to AppServiceProvider
```php
public function boot()
{
    \Puller::onOnlineAndOffline(fn () => UpdateOnlineCount::flux());
    \Puller::onNewTab(fn () => UpdateOnlineCount::flow());
    \Puller::onNewTab(fn () => UpdateChatList::flow());

    UpdateChatList::modelWatchToFlux(Chat::class);
    ClearTextarea::modelWatchToFlow(Chat::class);
}
```
#### 21. Add events in to EventServiceProvider for generate new events
```php
protected $listen = [
    \App\Events\WebMessage\SendMessage::class => [
        \App\Listeners\SendMessage\SendHandle::class,
    ],
];
```
#### 22. php artisan event:generate
#### 23. Change class \App\Events\WebMessage\SendMessage
```php
public function __construct(
    public ChatMessageRequest $request
) {}
```
#### 24. Change class \App\Listeners\SendMessage\SendHandle
```php
public function handle(SendMessage $event)
{
    \App\Models\Chat::create($event->request->transform());
}
```
#### 25. Change resources/views/layouts/app.blade.php before js/app.js script including
```html
<script src="{{ asset('vendor/puller/puller.js') }}"></script>
<script src="{{ asset('vendor/puller-alpine/puller-alpine.js') }}"></script>
```
#### 26. Create resources/views/chat/message.blade.php
```html
<div class="mt-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2" x-init>
                <textarea
                    x-model="$store.chat.message"
                    @keydown.enter.meta="$message('send-message', {message: $store.chat.message})"
                    id="test-chat-message"
                    name="message"
                    placeholder="Enter you message and press (Ctrl+Enter) for send"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                ></textarea>
            <template x-for="error in $store.errors">
                <p x-html="error"></p>
            </template>
        </div>
    </div>
</div>
```
#### 27. Create resources/views/chat/list.blade.php
```html
<div class="mt-6 pb-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="md:grid" x-data>
                <p class="p-2">Online users: <span x-html="$store.chat.online"></span></p>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                        <template x-for="item in $store.chat.list">
                            <div class="ltr:ml-3 rtl:mr-3 rounded-md shadow-lg mt-2 mb-2 p-2">
                                <p class="text-sm font-medium text-gray-300 group-hover:text-white" x-html="item.name"></p>
                                <p class="text-sm font-medium text-gray-500 group-hover:text-gray-300" x-html="item.message"></p>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@alpineStore('chat', ['online' => Puller::online(), 'message' => '', 'list' => []])
```
#### 28. Change resources/views/dashboard.blade.php
```html
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('chat.message')
    @include('chat.list')
</x-app-layout>
```
