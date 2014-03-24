<div id="welcome-form" class="container">
    <div class="gdmradio-block">
        <div class="gdmradio-block-title">EDIT CAROUSELS</div>
        <div class="gdmradio-block-content">
            <div class="gdmradio-block-content" data-bind="foreach: carousels">
                <!-- ko if: image -->
                <img src="" style="max-width: 100%;" data-bind="attr: { src: '/assets/img/uploads/' + image() }" />
                <hr />
                <!-- /ko -->
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <input name="title" type="text" class="form-control" data-bind="immediate: title, validate: $root.errors" placeholder="Title" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="title">Image</label>
                        <div class="col-sm-10">
                            <input name="image" type="file" class="form-control" data-bind="uploader: image, uploadUrl: '/welcome/image', validate: $root.errors" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="website">Website</label>
                        <div class="col-sm-10">
                            <input name="website" type="text" class="form-control" data-bind="immediate: website, validate: $root.errors" placeholder="Website" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="order">Order</label>
                        <div class="col-sm-10">
                            <input name="website" type="order" class="form-control" data-bind="immediate: order, validate: $root.errors" placeholder="Order" />
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
                            <button class="btn btn-default" data-bind="click: $root.remove_carousel">DELETE</button>
                        </div>
                    </div>
                </div>
                <hr />
            </div>
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-default" data-bind="click: $root.add_carousel">ADD</button>
                        <button class="btn btn-default" data-bind="click: $root.save">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>