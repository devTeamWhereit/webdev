<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">검색창</a></li>
        <li><a href="#tab_2" data-toggle="tab">매인베너</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active " id="tab_1">

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-2"><h4>검색창 가이드문구</h4></label>
                        <div class="col-md-8">
                            &nbsp;
                        </div>
                        <div class="col-md-2">
                            &nbsp;
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Header</label>
                        <div class="col-md-8">
                            <input type="text" name="header_text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-default">적용</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">main</label>
                        <div class="col-md-8">
                            <input type="text" name="main_text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-default">적용</button>
                        </div>
                    </div>

                </form>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">

            <form class="form-horizontal" id="banner_form">
                <input type="hidden" name="default_banner_num" id="default_banner_num" value="3" />
                <div class="form-group">
                    <label class="control-label col-md-2"><h4>매인 베너</h4></label>
                    <div class="col-md-8">
                        &nbsp;
                    </div>
                    <div class="col-md-2">
                        &nbsp;
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">banner1</label>
                    <div class="col-md-6">
                        <input type="text" name="banner11" class="form-control" placeholder="URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">&nbsp;</label>
                    <div class="col-md-6">
                        <input type="text" name="banner12" class="form-control" placeholder="파일명">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-default">첨부</button>
                        <button type="button" class="btn btn-primary">적용</button>
                        <button type="button" class="btn btn-danger">삭제</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">banner2</label>
                    <div class="col-md-6">
                        <input type="text" name="banner21" class="form-control" placeholder="URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">&nbsp;</label>
                    <div class="col-md-6">
                        <input type="text" name="banner22" class="form-control" placeholder="파일명">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-default">첨부</button>
                        <button type="button" class="btn btn-primary">적용</button>
                        <button type="button" class="btn btn-danger">삭제</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">banner3</label>
                    <div class="col-md-6">
                        <input type="text" name="banner31" class="form-control" placeholder="URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">&nbsp;</label>
                    <div class="col-md-6">
                        <input type="text" name="banner32" class="form-control" placeholder="파일명">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-default">첨부</button>
                        <button type="button" class="btn btn-primary">적용</button>
                        <button type="button" class="btn btn-danger">삭제</button>
                        <button type="button" class="btn btn-info plus-btn" onclick="banner_insert_plus()">추가</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<script>

</script>