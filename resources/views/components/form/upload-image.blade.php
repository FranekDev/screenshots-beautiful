<form
    action="/image/store"
    method="POST"
    enctype="multipart/form-data"
    class="flex flex-col items-center justify-center gap-10 "
>
    @csrf

    <div class="border-4 border-green-400 w-[600px] h-[350px] flex items-end justify-center bg-image bg-center bg-no-repeat bg-[length:300px_175px] cursor-pointer" id="upload-image">
        <input
            type="file"
            name="image"
            id="image"
            class="hidden text-sm text-zinc-100 items-center justify-center file:py-2 file:px-4 file:border-green-400 file:border-2 file:bg-transparent file:text-green-400 hover:file:bg-green-400 hover:file:text-neutral-900"
        />
        <p class="text-zinc-100 text-lg mb-10" id="image-desc">Click to upload</p>
    </div>
    <div>
        <x-button type="submit" class="after:content-['upload_image'] after:bg-green-400 after:text-neutral-900 before:border-green-400 after:border-green-400 after:text-xl text-xl">
            upload image
        </x-button>
    </div>
</form>
