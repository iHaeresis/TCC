@extends('layouts.app')


@section('content')

<!DOCTYPE html>

    <div class="container mx-auto">
      <form>
        <div class="mt-8">
          <label class="block mb-2 text-xl">Description </label>
          <textarea name="description" id="editor" class="bg-gray-500">
          </textarea>
        </div>
        <button
          class="
            px-4
            py-2
            mt-4
            text-sm text-white
            bg-blue-600
            rounded-lg
            hover:bg-blue-700
          "
        >
          Submit
        </button>
      </form>
    </div>
    <br><br>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor.create(document.querySelector('#editor')).catch((error) => {
        console.error(error);
      });
    </script>



@endsection
