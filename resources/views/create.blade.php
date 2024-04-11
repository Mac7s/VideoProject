@extends('layout')
@section('content')
<div class="site-output">
    <div id="all-output" class="col-md-10 upload">
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <div class="col-md-8">
                    <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                    <form action="{{route('videos.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>عنوان</label>
                                <input name="title" type="text" class="form-control" placeholder="عنوان">
                            </div>
                            <div class="col-md-6">
                                <label>دسته بندی</label>
                                    <select name="category_id" class="form-control" aria-label="Default select example">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="col-md-6">
                                <label>نام یکتا</label>
                                <input type="text" name="slug" class="form-control" placeholder="نام یکتا">
                            </div>
                            <div class="col-md-6">
                                <label>آپلود فیلم</label>
                                <input id="upload_file" name="video" type="file" class="file">
                            </div>
                            <input type="hidden" name="length" value="30">
                            <div class="col-md-12">
                                <label>توضیحات</label>
                                <textarea class="form-control" name="description" rows="4"  placeholder="توضیح"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label>تصویر</label>
                                <input id="featured_image" name="thumbnail" type="file" class="file">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                            </div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->

                <div class="col-md-4">
                    <a href="#"><img src="{{asset('demo_img/upload-adv.png')}}" alt=""></a>
                </div><!-- // col-md-8 -->
                <!-- // upload -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
  </div>
@endsection