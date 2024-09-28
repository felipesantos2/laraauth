<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @session('status')
        <div role="alert" class="mb-4 relative flex p-3 text-sm text-white bg-green-600 rounded-md w-full max-w-screen-lg px-4 mx-auto my-4">
            {{ $value }}
            <button
                class="flex items-center justify-center transition-all w-8 h-8 rounded-md text-white hover:bg-white/10 active:bg-white/10 absolute top-1.5 right-1.5"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    @endsession
</div>
