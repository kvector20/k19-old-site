@extends('admin.layouts.app')

@section('title')
Contacts
@endsection

@section('head')
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_editor.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_style.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/code_view.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/image_manager.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/image.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/table.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/video.css') }}">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>{{ $unread }} new messages</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">{{ $unread }}</span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input class="form-control" autofocus type="email" value="{{ old('to') }}" placeholder="To:" name="to" required>
                </div>
                <div class="form-group">
                  <input class="form-control" value="{{ old('subject') }}" name="subject" required placeholder="Subject:">
                </div>
                <div class="form-group">
                      <textarea id="bodyTextarea" class="form-control" name="message" required style="height: 300px">
                         {{ old('message') }}
                      </textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
              </div>
            </form>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('footer')
<script type="text/javascript" src="{{ asset('/admin_style/js/froala/froala_editor.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/align.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/code_beautifier.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/code_view.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/draggable.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/image.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/image_manager.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/link.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/lists.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/paragraph_format.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/paragraph_style.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/table.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/video.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/url.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/entities.min.js') }}"></script>

  <script>
      $(function(){
        $('#bodyTextarea')
          .froalaEditor({enter: $.FroalaEditor.ENTER_BR, placeholderText: "Write the email..."})
      });
  </script>
@endsection
