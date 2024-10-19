<x-app-layout>
    {{-- <h1>Form</h1>
    @if($errors->any())
        <ul>
            @foreach(@errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif --}}
    
    <form action="{{route('dashboard.packages.store')}}" enctype="multipart/form-data" method="POST">
    <div class="flex justify-between items-center mb-6">
        <h6 class="text-lg text-gray-600 font-semibold">Tambah Paket</h6>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
    
      </div>
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 ">
              <div class="col-span-full">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Paket</label>
                <div class="mt-2">
                  <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
                  </div>
                </div>
              </div>
              <div class="col-span-full">
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                <div class="mt-2">
                  <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="price" id="price" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
                  </div>
                </div>
              </div>
              <div class="col-span-full">
                <label for="price_before" class="block text-sm font-medium leading-6 text-gray-900">Harga Sebelum</label>
                <div class="mt-2">
                  <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="price_before" id="price_before" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
                  </div>
                </div>
              </div>
              <div class="col-span-full">
                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                <div class="mt-2">
                  <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-fit">
                    <textarea name="description" class="editor rounded-md border-gray-200 w-full" name="" id="" cols="100" rows="8"></textarea>
                </div>
                </div>
              </div>
            </div>
          </div>
      </form>

    @push('js')
    <script defer>
         tinymce.init({
            selector:'textarea.editor',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
            menubar: '', 
            toolbar: "blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media ",
            height: 240,
             /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
                URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                images_upload_url: 'postAcceptor.php',
                here we add custom filepicker only to Image dialog
            */
            file_picker_types: 'image',
            /* and here's our custom image picker*/
            file_picker_callback: (cb, value, meta) => {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.addEventListener('change', (e) => {
                const file = e.target.files[0];

                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    /*
                    Note: Now we need to register the blob in TinyMCEs image blob
                    registry. In the next release this part hopefully won't be
                    necessary, as we are looking to handle it internally.
                    */
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), { title: file.name });
                });
                reader.readAsDataURL(file);
                });

                input.click();
            },
        });
    </script>
    @endpush
    
    </x-app-layout>
    