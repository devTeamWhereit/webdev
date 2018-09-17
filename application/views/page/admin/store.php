<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-solid">
    <div class="box-body  ">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2 "><?=$page_title?></label>
                <!--        <label>Select</label>-->

                <div class="col-md-7 ">
                    <input type="text" class="form-control" >
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-store-insert">등록</button>
                    <button type="button" class="btn btn-danger">삭제</button>
                </div>
            </div>
        </form>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>번호</th>
                <th>대표이미지</th>
                <th>상호</th>
                <th>전화번호</th>
                <th>메뉴</th>
                <th>헤시태그</th>
                <th>주소</th>
            </tr>
            <tr>
                <td>183</td>
                <td>
                    <div class="user-block">
                        <img class="img-thumbnail" src="<?=$admin_assets_path?>/dist/img/user1-128x128.jpg" alt="Attachment Image">
                    </div>
                </td>
                <td>store1</td>
                <td>02-2133-5599</td>
                <td>카페</td>
                <td>감자로우주정복</td>
                <td>서울시 특별시 중구 신당동 222</td>
            </tr>
            <tr>
                <td>182</td>
                <td>
                    <div class="user-block">
                        <img class="img-thumbnail" src="<?=$admin_assets_path?>/dist/img/user1-128x128.jpg" alt="Attachment Image">
                    </div>
                </td>
                <td>store3</td>
                <td>02-2133-5599</td>
                <td>카페</td>
                <td>감자로우주정복</td>
                <td>서울시 특별시 중구 신당동 222</td>
            </tr>
            <tr>
                <td>181</td>
                <td>
                    <div class="user-block">
                        <img class="img-thumbnail" src="<?=$admin_assets_path?>/dist/img/user1-128x128.jpg" alt="Attachment Image">
                    </div>
                </td>
                <td>store3</td>
                <td>02-2133-5599</td>
                <td>카페</td>
                <td>감자로우주정복</td>
                <td>서울시 특별시 중구 신당동 222</td>
            </tr>
            <tr>
                <td>179</td>
                <td>
                    <div class="user-block">
                        <img class="img-thumbnail" src="<?=$admin_assets_path?>/dist/img/user1-128x128.jpg" alt="Attachment Image">
                    </div>
                </td>
                <td>store4</td>
                <td>02-2133-5599</td>
                <td>카페</td>
                <td>감자로우주정복</td>
                <td>서울시 특별시 중구 신당동 222</td>
            </tr>
            </tbody></table>
    </div>
    <div class="box-footer clearfix">
        <div class="text-center">
            <ul class="pagination pagination-sm pagination-centered">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-store-insert">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">업체등록</h4>
                </div>
                <div class="modal-body ">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-2 control-label">상호</label>
                            <div class="col-md-4"><input type="text" name="" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">대표이미지</label>
                            <div class="col-md-4"><input type="text" name="" class="form-control"></div>
                            <div class="col-md-2">
                                <button class="btn btn-default" type="button">첨부</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">전화번호</label>
                            <div class="col-md-4"><input type="text" name="" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">검색색인</label>
                            <div class="col-md-4"><input type="text" name="" class="form-control"></div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-default"><i class="fa fa-plus"></i> </button>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2">메뉴</label>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option>카페</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2">헤시태그</label>
                            <div class="col-md-4"><input type="text" name="" class="form-control"></div>
                            <div class="col-md-4"><input type="text" name="" class="form-control" placeholder="and"></div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-default"><i class="fa fa-plus"></i> </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2">주소</label>
                            <div class="col-md-10"><input type="text" name="" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2">&nbsp;</label>
                            <div class="col-md-10"><input type="text" name="" class="form-control"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">등록</button>
                <button type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close">취소</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>