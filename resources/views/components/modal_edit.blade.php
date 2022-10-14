<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" id="container-modal"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto" id="modal-add-post">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-orange-500 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation-triangle -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="text-white w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Add your post
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <label for="title-post" class="block text-sm font-medium text-orange-600">Title</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="title" id="title-post"
                            class="block border-orange-500 focus:border-indigo-500 
                            focus:ring-red-500 sm:text-sm"
                            placeholder="10 curiosity about cat">
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-orange-600">About</label>
                        <div class="mt-1">
                            <textarea id="about" name="about" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="you@example.com"></textarea>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-orange-600">Cover photo</label>
                        <div
                            class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-medium text-orange-500 
                                        focus-within:outline-none focus-within:ring-2 focus-within:ring-orange-900 
                                        focus-within:ring-offset-2 hover:text-orange-900">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG and JPEG up to 5MB</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button"
                            class="inline-flex w-full justify-center rounded-md border border-transparent bg-orange-500 
                            px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-orange-900 focus:outline-none 
                            focus:ring-2 focus:ring-orange-700 focus:ring-offset-2 
                            sm:ml-3 sm:w-auto sm:text-sm">Create</button>
                        <button type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white 
                            px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none 
                            focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:mt-0 
                            sm:ml-3 sm:w-auto sm:text-sm" id="cancel-add-post">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
