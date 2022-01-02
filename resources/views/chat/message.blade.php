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
