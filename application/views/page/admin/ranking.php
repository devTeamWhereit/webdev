<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-solid">
    <div class="box-body">
        <form class="form-horizontal" id="banner_form">
            <input type="hidden" name="default_banner_num" id="default_banner_num" value="3" />
            <div class="form-group">
                <label class="control-label col-md-2"><h4>테마</h4></label>
                <div class="col-md-8">
                    &nbsp;
                </div>
                <div class="col-md-2">
                    &nbsp;
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">테마1</label>
                <div class="col-md-6">
                    <input type="text" name="banner11" class="form-control" placeholder="URL">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">&nbsp;테그1</label>
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
                <label class="control-label col-md-2">테마2</label>
                <div class="col-md-6">
                    <input type="text" name="banner21" class="form-control" placeholder="URL">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">테그2</label>
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
                <label class="control-label col-md-2">테마3</label>
                <div class="col-md-6">
                    <input type="text" name="banner31" class="form-control" placeholder="URL">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">테그3</label>
                <div class="col-md-6">
                    <input type="text" name="banner32" class="form-control" placeholder="파일명">
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-default">첨부</button>
                    <button type="button" class="btn btn-primary">적용</button>
                    <button type="button" class="btn btn-danger">삭제</button>
                    <button type="button" class="btn btn-info plus-btn" onclick="banner_insert_plus('theme_rank')">추가</button>
                </div>
            </div>
        </form>
    </div>
</div>

