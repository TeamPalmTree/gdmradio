<div id="content" class="container" data-model="Posts_Form_Model">
    <div class="gdmradio-block">
        <div class="gdmradio-block-title" data-bind="if: post">
            <span data-bind="text: post().id() ? ('EDIT ' + post().title()) : ('CREATE ' + (post().title() ? post().title() : ''))"></span>
        </div>
        <div class="gdmradio-block-content">
            <div class="form-horizontal" data-bind="with: post">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">Title</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" data-bind="immediate: title, validate: $root.errors" placeholder="Title" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="image">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="file" class="form-control" data-bind="uploader: image, uploadUrl: '/posts/image', validate: $root.errors" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="text">Text</label>
                    <div class="col-sm-10">
                        <textarea id="post-form-text" name="text" class="form-control" data-bind="ckeditor: text, validate: $root.errors">
                            This is my textarea to be replaced with CKEditor.
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-default" data-bind="click: $root.save">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>