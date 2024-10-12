<x-app-layout>
    <form method="POST" action="{{route('dashboard.course.create.question.store', $course)}}">
        @csrf
        <div class="flex justify-between items-center mb-6">
            <h6 class="text-lg text-gray-600 font-semibold">Add Question for {{$course->name}}</h6>
            <button class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 "
            type="submit">Save</button>
        </div>
        <div class="border border-gray-200 bg-white p-4 rounded-md">
            <div class="relative w-full min-w-[200px]">
                <label for="question" class="font-bold">Question</label>
                <textarea name="question"
                class="editor peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-200 focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "></textarea>
            </div>
            <div class="flex items-center mt-2 gap-2">
                <h1 class="font-bold">Question Section </h1>
                <label for="twk" class="border p-1 rounded-md has-[:checked]:bg-green-400 has-[:checked]:text-white cursor-pointer ">
                    <span>TWK</span>
                    <input id="twk" value="TWK" type="radio"  name="question_type" class="hidden">
                </label>
                <label for="tiu" class="border p-1 rounded-md has-[:checked]:bg-green-400 has-[:checked]:text-white cursor-pointer">
                    <span>TIU</span>
                    <input id="tiu" value="TIU" type="radio"  name="question_type" class="hidden">
                </label>
                <label for="tkp" class="border p-1 rounded-md has-[:checked]:bg-green-400 has-[:checked]:text-white cursor-pointer">
                    <span>TKP</span>
                    <input id="tkp" value="TKP" type="radio"  name="question_type" class="hidden">
                </label>
                <label for="common" class="border p-1 rounded-md has-[:checked]:bg-green-400 has-[:checked]:text-white cursor-pointer">
                    <span>Common</span>
                    <input id="common" checked value="COMMON" type="radio" name="question_type" class="hidden">
                </label>
            </div>
            <div class="flex gap-4">
                <div class="flex flex-col mt-4 gap-2">
                    <h1 for="answer" class="font-bold">Answer</h1>
                    @for($i=0; $i<5; $i++)
                        <div class="flex gap-2 items-center">
                            <input name="answers[]" type="text" class="rounded-md border-gray-200 w-80" placeholder="answer for option {{chr(65 + $i)}}"> 
                            <div>
                                <input type="radio" value="{{$i}}" name="correct_answer">
                                <label for="correct_answer">Correct</label>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="flex flex-col mt-4 gap-2">
                    <h1 for="answer" class="font-bold">Discussion</h1>
                    <textarea name="discussion" class="editor rounded-md border-gray-200 w-full" name="" id="" cols="100" rows="8"></textarea>
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