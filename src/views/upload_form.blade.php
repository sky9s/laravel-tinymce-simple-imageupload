<iframe id="frameUpload" name="frameUpload" style="display:none"></iframe>
<form id="formUpload" action="{{ isset($upload_url) ? $upload_url : route('tinymce.imageupload') }}" target="frameUpload" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
    <input name="image" type="file" onchange="$('#formUpload').submit();">
    @csrf
</form>