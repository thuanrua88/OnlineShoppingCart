<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input type="text" class="form-control"  placeholder="Tên danh mục" value="{{old('name',isset($category->c_name) ? $category->c_name : '')}}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Icon</label>
        <input type="text" class="form-control"  placeholder="fa fa-home" value="{{old('icon',isset($category->c_icon) ? $category->c_icon : '')}}" name="icon">
        @if($errors->has('name'))
            <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Meta Title:</label>
        <input type="text" class="form-control"  placeholder="Meta title" value="{{old('c_title_seo',isset($category->c_title_seo) ? $category->c_title_seo : '')}}" name="c_title_seo">
    </div>
    <div class="form-group">
        <label for="name">Meta Description:</label>
        <input type="text" class="form-control"  placeholder="Meta Description" value="{{old('c_description_seo',isset($category->c_description_seo) ? $category->c_description_seo : '')}}" name="c_description_seo">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label><input type="checkbox" name="hot">Nổi bật</label>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>
