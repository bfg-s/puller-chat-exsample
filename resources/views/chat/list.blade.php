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
