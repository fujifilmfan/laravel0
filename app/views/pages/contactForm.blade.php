@extends('layouts.project')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 myEmailForm">
                <form class="form-horizontal" method="post">
<!-- NAME - REQUIRED -->
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="name">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name (required)" />
                                </div>
                            </div>
                        </div>
                    </div>
<!-- EMAIL - REQUIRED -->
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <!-- sr-only hides input labels (the labels help with screen readers) -->
                                <!-- "for" binds the label to the input element -->
                                <label class="col-sm-2 control-label" for="email">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email address (required)" />
                                    <!-- <span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span> -->
                                </div>
                            </div>
                        </div>
                    </div>
<!-- SUBJECT - REQUIRED -->
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="subject">Subject</label>
                                <div class="col-sm-6">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject (required)" />
                                </div>
                            </div>
                        </div>
                    </div>
<!-- BODY -->
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="body">Comments</label>
                                <div class="col-sm-6">
                                    <textarea name="body" class="form-control" id="body" placeholder="What's on your mind?" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- HOMEPAGE -->
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="homepage">Home page</label>
                                <div class="col-sm-6">
                                    <input type="text" name="homepage" class="form-control" id="homepage" placeholder="www.example.com" />
                                </div>
                            </div>
                        </div>
                    </div>
<!-- SUBMIT -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop