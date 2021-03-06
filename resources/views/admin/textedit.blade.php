@extends('admin.layouts.master')

    @section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Edit Text</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('admin.textupdate', $text->id) }}" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>text:</label>
                                    <textarea name="text" id="editor1" rows="10" cols="80" required>
                                        {{$text->text}}
                                    </textarea>
                            </div>
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">

                            <input type="submit" class="btn btn-default">
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                </div>

    @endsection