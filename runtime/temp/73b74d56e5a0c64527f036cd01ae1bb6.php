<?php /*a:3:{s:81:"F:\aProjectDevelopment\qianxun\application\generate\view\view\add_controller.html";i:1554892859;s:71:"F:\aProjectDevelopment\qianxun\application\generate\view\view\base.html";i:1554892859;s:71:"F:\aProjectDevelopment\qianxun\application\generate\view\view\head.html";i:1554892859;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>代码生成</title>
    <!-- 引入Vue -->
    <script src="/../static/generate/vue.min.js"></script>

    <!--Bootstrap-->
    <link rel="stylesheet" href="/../static/generate/bootstrap.min.css" crossorigin="anonymous">
    <script src="/../static/generate/jquery.min.js" crossorigin="anonymous"></script>
    <script src="/../static/generate/popper.min.js" crossorigin="anonymous"></script>
    <script src="/../static/generate/bootstrap.min.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body,.container-fluid{
            min-height: 100vh !important;
        }
        .bg-db{
            background-color:#4479a1;
        }
        .btn-db,.btn-db:hover {
            color: #fff;
            background-color: #4479a1;
            border-color: #4479a1;
        }
        .btn-db:not(:disabled):not(.disabled).active, .btn-db:not(:disabled):not(.disabled):active, .show>.btn-db.dropdown-toggle {
            color: #fff;
            background-color: #2b5d80;
            border-color: #2b5d80;
        }
        .btn:focus,
        .btn:active:focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn.active.focus {
            outline: none;
            box-shadow:none;
        }
        .bd-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 56px;
            z-index: 1000;
            height: calc(100vh - 56px);
            -webkit-box-flex: 0;
            -ms-flex: 0 1 320px;
            flex: 0 1 320px;
            border-bottom: 1px solid rgba(0,0,0,.1);
            border-right: 1px solid rgba(0,0,0,.1);
        }
        .bd-links {
            display: block!important;
            max-height: 100%;
            overflow-y: auto;
            padding-top: 1rem;
            padding-bottom: 1rem;
            margin-right: -15px;
        }
        .bd-toc-item:not(:first-child) {
            margin-top: 1rem;
        }
        .bd-toc-item {
            margin-bottom: 1rem;
        }
        .bd-toc-item>.bd-toc-link {
            color: rgba(0,0,0,.85);
        }
        .bd-toc-link {
            display: block;
            padding: .25rem 1.5rem;
            font-weight: 500;
            color: rgba(0,0,0,.65);
        }
        .bd-toc-link:hover {
            color: rgba(0,0,0,.85);
            text-decoration: none;
        }
        .bd-sidebar .nav>li>a:hover {
            color: rgba(0,0,0,.85);
            text-decoration: none;
            background-color: transparent;
        }
        .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .bd-sidebar .nav>li{
            width: 100%;
        }
        .bd-sidebar .nav>li>a {
            display: block;
            padding: .25rem 1.5rem;
            font-size: 90%;
            color: rgba(0,0,0,.65);
        }
        .bd-title {
            font-size: 2rem;
            margin-top: 1rem;
            margin-bottom: .5rem;
            font-weight: lighter !important;
        }
        .bd-content{
            width: calc(100% - 50px);
        }
        .f_r_nav{
            position: fixed;
            right: 0;
            top: calc(50% - 180px);
            height: 362px;
            width:100px;
            background: #ffffff;
            border:1px solid #BFBFBF;
            border-right: none;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            overflow: hidden;
        }
        .nav-pills.f_r_nav .nav_title {
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-bottom: 1px solid #BFBFBF;
        }
        .nav-pills.f_r_nav .nav-link {
            transition: .3s;
            text-align: center;
            border-radius: unset;
        }
        .nav-pills.f_r_nav .nav-link:hover {
            color: #fff;
            background-color: #007bff;
        }
        .nav-pills.f_r_nav .submit {
            transition: .3s;
            text-align: center;
            border-radius: unset;
            text-decoration: none;
            height: 40px;
            line-height: 40px;
            border-top: 1px solid #BFBFBF;
            color: #2b5d80;
        }
        .nav-pills.f_r_nav .submit:hover {
            color: #fff;
            background-color: #2b5d80;
        }
        .c_module_content{
            padding-bottom: 300px;
        }
        .c_module_content .row{
            margin-top: 10px;
            padding-top: 16px;
            border: 1px solid #8cb2fb;
            background: #f7fcff;
        }
        .c_module_content table{
            background: #ffffff;
        }

    </style>


</head>

<style type="text/css">
    th, td {
        text-align: center !important;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; top: 0; width: 100%;z-index: 1000;">
    <span class="navbar-brand mb-0 h1">Generate</span>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <button class="btn btn-sm btn-outline-light" role="button" aria-disabled="true">Powered By SXW</button>
            </li>
        </ul>
    </div>
</nav>
<div class="row container-fluid">
    <div class="col-3 col-md-3 col-xl-2 bd-sidebar">
        <nav class="bd-links" id="bd-docs-nav">
            <div class="bd-toc-item">
                <a class="bd-toc-link" href="<?php echo url('/generate/Index/index'); ?>">基础数据</a>
                <ul class="nav bd-sidenav">
                    <li><a href="<?php echo url('/generate/Index/index'); ?>">基础数据</a></li>
                    <li><a href="<?php echo url('/generate/Index/table'); ?>">添加数据表</a></li>
                    <!--<li><a href="<?php echo url('/generate/Index/add_controller'); ?>">添加控制器</a></li>-->
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-9 col-md-9 col-xl-10" style="padding-top: 56px;">
        <main class="py-md-3 pl-md-5 bd-content" role="main">


<h1 class="bd-title" id="content">添加接口</h1>
<hr>

<div id="controller">
    <form action="" id="new_function_form" class="row" onsubmit="controller.submit_f_data(event)">
        <div class="form-group col-4">
            <label>数据表</label>
            <select class="form-control" name="table_name" :value="base_data.id" required disabled>
                <option v-for="list in table_list" :value="list.id">{{list.table_prefix}}{{list.table_name}}</option>
            </select>
        </div>
        <div class="form-group col-4">
            <label>接口标题</label>
            <input type="text" class="form-control" name="function_title" placeholder="接口标题" required>
        </div>
        <div class="form-group col-10">
            <label>接口说明</label>
            <textarea name="function_desc" class="form-control"></textarea>
        </div>
        <div class="form-group col-3">
            <label>负责人</label>
            <select class="form-control" name="person_name" required>
                <option v-for="list in person_list" :value="list.name">{{list.name}}</option>
            </select>
        </div>
        <div class="form-group col-3">
            <label>接口名称</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">/{{base_data.db_name}}/{{base_data.table_name}}/</div>
                </div>
                <input type="text" class="form-control" name="function_name" placeholder="" required>
            </div>
        </div>
        <div class="form-group col-4">
            <label>访问方式</label>
            <select class="form-control" name="method_type" required>
                <option v-for="list in method_type" :value="list">{{list}}</option>
            </select>
        </div>
        <button type="submit" id="btn_submit" style="display: none"></button>
    </form>
    <!--组件主体-->
    <form class="c_module_content">
        <template v-for="(module,index) in function_list">
            <!-- 输入参数 input -->
            <template v-if="module.type==='input'">
                <div class="row">
                    <div class="col-2">
                        <h4>输入参数</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" width="100">接口返回</th>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举注释</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.data">
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" v-model="function_list[index].data[i].is_back" class="custom-control-input" :id="'is_back_'+index+'_'+i">
                                        <label class="custom-control-label" :for="'is_back_'+index+'_'+i">{{list.is_back?'返回':'不返回'}}</label>
                                    </div>
                                </td>
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_data('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <button type="button" class="btn btn-light" style="width: 100%" :onclick="'controller.f_input_modal('+index+')'">+</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
            <!-- 验证器 validate -->
            <template v-if="module.type==='validate'">
                <div class="row">
                    <div class="col-2">
                        <h4>验证器</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输入变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <!--<input type="text" class="form-control" v-model="function_list[index].input_name" required>-->
                                <select class="form-control" v-model="function_list[index].input_name" placeholder="变量名称" required>
                                    <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && i<index" :value="li.return_name">{{li.return_name}}</option>
                                </select>
                            </div>
                            <label class="ml-3">场景：</label>
                            <select class="form-control" v-model="function_list[index].validate" required>
                                <option v-for="li in validate_scene_list" :value="li" selected = "selected">{{li.name}}</option>
                            </select>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" placeholder="变量名称" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-11">

                    </div>
                </div>
            </template>
            <!-- 插入数据 insert -->
            <template v-if="module.type==='insert'">
                <div class="row">
                    <div class="col-2">
                        <h4>插入数据</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" required>
                            </div>
                            <label class="ml-3">数据表：</label>
                            <select class="form-control" v-model="function_list[index].table_name" required>
                                <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                            </select>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_insert.field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == function_list[index].table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.insert_add_field('+index+')'">添加字段</button>
                        </div>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">选择变量</th>
                                <th scope="col">选择变量名</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.data">
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].data[i].root_var_name">
                                        <option value="">无</option>
                                        <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].data[i].root_field_name" v-if="function_list[index].data[i].root_var_name!==''">
                                        <template  v-for="li in function_list" v-if="li.return_name == function_list[index].data[i].root_var_name">
                                            <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                        </template>
                                    </select>
                                    <input type="text" v-if="function_list[index].data[i].root_var_name==''" v-model="function_list[index].data[i].root_field_name" class="form-control form-control-sm">
                                </td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control form-control-sm">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_data('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.data.length==0">
                                <td colspan="8">无数据</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
            <!-- 删除数据 delete -->
            <template v-if="module.type==='delete'">
                <div class="row">
                    <div class="col-2">
                        <h4>删除数据</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" required>
                            </div>
                            <label class="ml-3">数据表：</label>
                            <template v-if="module.where.length === 0">
                                <select class="form-control" v-model="function_list[index].table_name" required>
                                    <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                </select>
                            </template>
                            <template v-if="module.where.length !== 0">
                                <select class="form-control" v-model="function_list[index].table_name" required disabled>
                                    <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                </select>
                            </template>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_delete.field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == function_list[index].table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.delete_add_where('+index+')'">添加字段</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4>where</h4>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">条件</th>
                                <th scope="col">选择变量</th>
                                <th scope="col">选择变量名</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.where">
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].condition" required>
                                        <option v-for="li in condition" :value="li">{{li}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_var_name">
                                        <option value="">无</option>
                                        <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_field_name" v-if="function_list[index].where[i].con_var_name!==''" required>
                                        <template  v-for="li in function_list" v-if="li.return_name == function_list[index].where[i].con_var_name">
                                            <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                        </template>
                                    </select>
                                    <input type="text" v-if="function_list[index].where[i].con_var_name==''" v-model="function_list[index].where[i].con_field_name" class="form-control form-control-sm" placeholder="变量名" required>
                                </td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_where('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.where.length==0">
                                <td colspan="9">无数据</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </template>
            <!-- 更新数据 update -->
            <template v-if="module.type==='update'">
                <div class="row">
                    <div class="col-2">
                        <h4>更新数据</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" required>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <h4>field</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <label class="ml-3">数据表：</label>
                            <select class="form-control" v-model="function_list[index].table_name" required>
                                <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                            </select>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_insert.field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == function_list[index].table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.insert_add_field('+index+')'">添加字段</button>
                        </div>
                    </div>

                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">选择变量</th>
                                <th scope="col">选择变量名</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.data">
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].data[i].root_var_name">
                                        <option value="">无</option>
                                        <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].data[i].root_field_name" v-if="function_list[index].data[i].root_var_name!==''">
                                        <template  v-for="li in function_list" v-if="li.return_name == function_list[index].data[i].root_var_name">
                                            <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                        </template>
                                    </select>
                                    <input type="text" v-if="function_list[index].data[i].root_var_name==''" v-model="function_list[index].data[i].root_field_name" class="form-control">
                                </td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control form-control-sm">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_data('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.data.length==0">
                                <td colspan="8">无数据</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12">
                        <h4>where</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <label>数据表：</label>
                            <select class="form-control" v-model="f_temp_delete.table_name" required>
                                <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                            </select>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_delete.field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == f_temp_delete.table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.update_add_where('+index+')'">添加字段</button>
                        </div>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">条件</th>
                                <th scope="col">选择变量</th>
                                <th scope="col">选择变量名</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.where">
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].condition" required>
                                        <option v-for="li in condition" :value="li">{{li}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_var_name">
                                        <option value="">无</option>
                                        <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_field_name" v-if="function_list[index].where[i].con_var_name!==''" required>
                                        <template  v-for="li in function_list" v-if="li.return_name == function_list[index].where[i].con_var_name">
                                            <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                        </template>
                                    </select>
                                    <input type="text" v-if="function_list[index].where[i].con_var_name==''" v-model="function_list[index].where[i].con_field_name" class="form-control form-control-sm" placeholder="变量名" required>
                                </td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_where('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.where.length==0">
                                <td colspan="9">无数据</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </template>
            <!-- 查询数据 select -->
            <template v-if="module.type==='select'">
                <div class="row">
                    <div class="col-2">
                        <h4>数据查询</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <label class="ml-3">输出变量：</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" v-model="function_list[index].return_name" required>
                            </div>
                            <label class="ml-3">查询方式：</label>
                            <select class="form-control" v-model="function_list[index].select_type" required>
                                <option v-for="li in select_type" :value="li">{{li}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <h4>field</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <label class="ml-3">数据表：</label>
                            <template v-if="function_list[index].data.length===0 | function_list[index].table_name === ''">
                                <select class="form-control" v-model="function_list[index].table_name" required>
                                    <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                </select>
                            </template>
                            <template v-if="function_list[index].data.length!==0 && function_list[index].table_name !==''">
                                <select class="form-control" v-model="function_list[index].table_name" required disabled>
                                    <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                </select>
                            </template>
                            <template v-if="function_list[index].join.length!==0">
                                <label class="ml-3">别名：</label>
                                <template v-if="function_list[index].data.length===0 | function_list[index].alias === ''">
                                    <input type="text" class="form-control ml-3" v-model="function_list[index].alias" placeholder="别名" required>
                                </template>
                                <template v-if="function_list[index].data.length!==0 && function_list[index].alias !==''">
                                    <input type="text" class="form-control ml-3" v-model="function_list[index].alias" placeholder="别名" required readonly>
                                </template>
                            </template>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_select_field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == function_list[index].table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.select_add_field('+index+')'">添加字段</button>
                            <button type="button" class="btn btn-db ml-3" :onclick="'controller.select_add_join('+index+')'">添加关联查询</button>


                        </div>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" width="100">接口返回</th>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举注释</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.data">
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" v-model="function_list[index].data[i].is_back" class="custom-control-input" :id="'is_back_'+index+'_'+i">
                                        <label class="custom-control-label" :for="'is_back_'+index+'_'+i">{{list.is_back?'返回':'不返回'}}</label>
                                    </div>
                                </td>
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_data('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.data.length==0 && function_list[index].join.length===0">
                                <td colspan="9">查询全部字段</td>
                            </tr>
                            <tr v-if="module.data.length==0 && function_list[index].join.length!==0">
                                <td colspan="9">无查询字段</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <template v-for="(j_li,j_i) in function_list[index].join">

                        <div class="col-12">
                            <h4>{{j_li.type}} JOIN</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group form-inline">
                                <button type="button" class="btn btn-secondary" :onclick="'controller.del_f_join('+index+','+j_i+')'">删除</button>
                                <label class="ml-3">数据表：</label>

                                <select class="form-control" v-model="function_list[index].join[j_i].type" required>
                                    <option v-for="li in join_type" :value="li">{{li}}</option>
                                </select>

                                <template v-if="j_li.data.length===0 | j_li.table_name === ''">
                                    <select class="form-control ml-2" v-model="function_list[index].join[j_i].table_name" required>
                                        <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                    </select>
                                </template>
                                <template v-if="j_li.data.length!==0 && j_li.table_name !==''">
                                    <select class="form-control ml-2" v-model="function_list[index].join[j_i].table_name" required disabled>
                                        <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                    </select>
                                </template>

                                <template v-if="function_list[index].join.length!==0">
                                    <label class="ml-3">别名：</label>
                                    <template v-if="j_li.data.length===0 | j_li.alias === ''">
                                        <input type="text" class="form-control ml-3" v-model="function_list[index].join[j_i].alias" placeholder="别名" required>
                                    </template>
                                    <template v-if="j_li.data.length!==0 && j_li.alias !==''">
                                        <input type="text" class="form-control ml-3" v-model="function_list[index].join[j_i].alias" placeholder="别名" required readonly>
                                    </template>
                                </template>

                                <label class="ml-3">字段：</label>
                                <select class="form-control"  v-model="f_temp_select_join_field" required>
                                    <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == function_list[index].join[j_i].table_name">
                                        <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                    </template>
                                </select>
                                <button type="button" class="btn btn-primary ml-3" :onclick="'controller.add_f_select_join('+index+','+j_i+')'">添加字段</button>
                            </div>
                        </div>
                        <!--join form END-->
                        <!--join table begin-->
                        <div class="col-11">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" width="100">接口返回</th>
                                    <th scope="col">数据表</th>
                                    <th scope="col">字段名</th>
                                    <th scope="col">字段</th>
                                    <th scope="col">类型</th>
                                    <th scope="col">枚举注释</th>
                                    <th scope="col">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(list,i) in module.join[j_i].data">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" v-model="function_list[index].join[j_i].data[i].is_back" class="custom-control-input" :id="'is_back_'+index+'_'+i">
                                            <label class="custom-control-label" :for="'is_back_'+index+'_'+i">{{list.is_back?'返回':'不返回'}}</label>
                                        </div>
                                    </td>
                                    <td>{{list.table_name}}</td>
                                    <td>{{list.comment}}</td>
                                    <td>{{list.field_name}}</td>
                                    <td>{{list.field_type}}</td>
                                    <td>
                                        <template v-if="list.enum.length!==0">
                                            <select class="form-control form-control-sm">
                                                <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                            </select>
                                        </template>
                                        <template v-if="list.enum.length===0">—</template>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_select_join('+index+','+j_i+','+i+')'">删除</button>
                                    </td>
                                </tr>
                                <tr v-if="module.join[j_i].data.length==0">
                                    <td colspan="9">无查询字段</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </template>

                    <template v-if="function_list[index].join.length!==0">
                        <div class="col-11">
                            <h4>关联条件</h4>
                        </div>
                        <div class="col-11">
                            <div class="form-group form-inline">
                                <label>关联数据表：</label>
                                <select class="form-control" v-model="f_temp_select_join_condition.join_alias_name" required>
                                    <option v-for="li in function_list[index].join" :value="li.alias">{{li.alias}} - {{li.table_name}}</option>
                                </select>
                                <label class="ml-3">字段：</label>
                                <select class="form-control"  v-model="f_temp_select_join_condition.field" required>
                                    <template v-for="li in function_list[index].join" v-if="li.alias == f_temp_select_join_condition.join_alias_name">
                                        <option v-for="fie in li.data" :value="fie">{{fie.comment}}-{{fie.field_name}}</option>
                                    </template>
                                </select>
                                <button type="button" class="btn btn-primary ml-3" :onclick="'controller.add_f_select_condition('+index+')'">添加字段</button>
                            </div>
                        </div>
                        <!--   关联条件  form end -->
                        <!--   关联条件  表格 begin -->
                        <div class="col-11">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">关联数据表</th>
                                    <th scope="col">字段名</th>
                                    <th scope="col">字段</th>
                                    <th scope="col">条件</th>
                                    <th scope="col">选择变量</th>
                                    <th scope="col">选择变量名</th>
                                    <th scope="col">类型</th>
                                    <th scope="col">枚举</th>
                                    <th scope="col">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(list,c_i) in module.condition">
                                    <td>{{list.alias}}</td>
                                    <td>{{list.comment}}</td>
                                    <td>{{list.field}}</td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].condition[c_i].condition" required>
                                            <option v-for="li in condition" :value="li">{{li}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].condition[c_i].left_var">
                                            <option value="">无</option>
                                            <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<=index" :value="li.return_name">${{li.return_name}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].condition[c_i].left_field" v-if="function_list[index].condition[c_i].left_var!==''" required>
                                            <template  v-for="li in function_list" v-if="li.return_name == function_list[index].condition[c_i].left_var">
                                                <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                            </template>
                                        </select>
                                        <input type="text" v-if="function_list[index].condition[c_i].left_var==''" v-model="function_list[index].condition[c_i].left_field" class="form-control form-control-sm" placeholder="变量名" required>
                                    </td>
                                    <td>{{list.type}}</td>
                                    <td>
                                        <template v-if="list.enum.length!==0">
                                            <select class="form-control form-control-sm">
                                                <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                            </select>
                                        </template>
                                        <template v-if="list.enum.length===0">—</template>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_select_condition('+index+','+c_i+')'">删除</button>
                                    </td>
                                </tr>
                                <tr v-if="module.condition.length==0">
                                    <td colspan="9">无数据</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </template>
                    <!--     where      -->
                    <div class="col-12">
                        <h4>where</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <label class="ml-3">数据表：</label>
                            <select class="form-control" v-model="f_temp_delete.table_name" required>
                                <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                            </select>
                            <label class="ml-3">字段：</label>
                            <select class="form-control"  v-model="f_temp_delete.field" required>
                                <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == f_temp_delete.table_name">
                                    <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                </template>
                            </select>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.update_add_where('+index+')'">添加字段</button>
                        </div>
                    </div>
                    <div class="col-11">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">数据表</th>
                                <th scope="col">字段名</th>
                                <th scope="col">字段</th>
                                <th scope="col">条件</th>
                                <th scope="col">选择变量</th>
                                <th scope="col">选择变量名</th>
                                <th scope="col">类型</th>
                                <th scope="col">枚举</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(list,i) in module.where">
                                <td>{{list.table_name}}</td>
                                <td>{{list.comment}}</td>
                                <td>{{list.field_name}}</td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].condition" required>
                                        <option v-for="li in condition" :value="li">{{li}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_var_name">
                                        <option value="">无</option>
                                        <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control form-control-sm" v-model="function_list[index].where[i].con_field_name" v-if="function_list[index].where[i].con_var_name!==''" required>
                                        <template  v-for="li in function_list" v-if="li.return_name == function_list[index].where[i].con_var_name">
                                            <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                        </template>
                                    </select>
                                    <input type="text" v-if="function_list[index].where[i].con_var_name==''" v-model="function_list[index].where[i].con_field_name" class="form-control form-control-sm" placeholder="变量名" required>
                                </td>
                                <td>{{list.field_type}}</td>
                                <td>
                                    <template v-if="list.enum.length!==0">
                                        <select class="form-control">
                                            <option v-for="li in list.enum">{{li.key}} - {{li.name}}</option>
                                        </select>
                                    </template>
                                    <template v-if="list.enum.length===0">—</template>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_module_where('+index+','+i+')'">删除</button>
                                </td>
                            </tr>
                            <tr v-if="module.where.length==0">
                                <td colspan="9">查询全部记录</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </template>
            <!-- 错误提示 error_msg -->
            <template v-if="module.type==='error_msg'">
                <div class="row">
                    <div class="col-2">
                        <h4>错误提示</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-inline">
                            <button type="button" class="btn btn-danger" :onclick="'controller.del_function_module('+index+')'">删除</button>
                            <button type="button" class="btn btn-primary ml-3" :onclick="'controller.add_f_error_msg('+index+')'">添加条件</button>
                        </div>
                    </div>

                    <template v-for="(h_li,h_i) in module.hint">
                        <div class="col-12">
                            <div class="form-group form-inline">
                                <label><template v-if="h_i!==0"><strong class="mr-2">else </strong></template>错误结果提示</label>
                                <input type="text" class="form-control ml-3" placeholder="报错提示" v-model="function_list[index].hint[h_i].message">
                                <button type="button" class="btn btn-secondary btn-sm ml-3" v-if="h_i>0" :onclick="'controller.del_f_error_msg('+index+','+h_i+')'">删除</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">变量</th>
                                    <th scope="col">字段</th>
                                    <th scope="col">条件</th>
                                    <th scope="col">变量</th>
                                    <th scope="col">字段</th>
                                    <th scope="col">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(list,i) in h_li.where">
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].hint[h_i].where[i].var_name">
                                            <option value="">无</option>
                                            <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].hint[h_i].where[i].field_name" v-if="function_list[index].hint[h_i].where[i].var_name!==''" required>
                                            <template  v-for="li in function_list" v-if="li.return_name == function_list[index].hint[h_i].where[i].var_name">
                                                <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                            </template>
                                        </select>
                                        <input type="text" v-if="function_list[index].hint[h_i].where[i].var_name==''" v-model="function_list[index].hint[h_i].where[i].field_name" class="form-control form-control-sm" placeholder="变量名" required>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].hint[h_i].where[i].condition" required>
                                            <option v-for="li in condition" :value="li">{{li}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].hint[h_i].where[i].con_var_name">
                                            <option value="">无</option>
                                            <option v-for="(li,i) in function_list" v-if="li.return_name!=='' && li.data && li.data && i<index" :value="li.return_name">${{li.return_name}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm" v-model="function_list[index].hint[h_i].where[i].con_field_name" v-if="function_list[index].hint[h_i].where[i].con_var_name!==''" required>
                                            <template  v-for="li in function_list" v-if="li.return_name == function_list[index].hint[h_i].where[i].con_var_name">
                                                <option v-for="l in li.data" :value="l.field_name">{{l.field_name}} - {{l.comment}}</option>
                                            </template>
                                        </select>
                                        <input type="text" v-if="function_list[index].hint[h_i].where[i].con_var_name==''" v-model="function_list[index].hint[h_i].where[i].con_field_name" class="form-control form-control-sm" placeholder="变量名" required>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger btn-sm" :onclick="'controller.del_f_error_msg_where('+index+','+h_i+','+i+')'">删除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <button type="button" class="btn btn-light w-100" :onclick="'controller.add_f_error_msg_where('+index+','+h_i+')'">+</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </template>


                </div>
            </template>

        </template>

    </form>
    <!-- input 输入参数 modal -->
    <form action="" onsubmit="controller.input_add_field(event)">
        <div class="modal fade" id="f_input_add_var" tabindex="-1" role="dialog" aria-labelledby="FunctionInputAddVarLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="FunctionInputAddVarLabel">添加参数</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-group">
                                <label>返回参数</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" v-model="f_temp_input.is_back" class="custom-control-input" id="f_t_input_back">
                                    <label class="custom-control-label" for="f_t_input_back">{{f_temp_input.is_back?'返回':'不返回'}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>数据表</label>
                                <select class="form-control" v-model="f_temp_input.table_name">
                                    <option value="">无</option>
                                    <option v-for="li in table_list" :value="li.table_prefix+li.table_name">{{li.table_prefix}}{{li.table_name}}</option>
                                </select>
                            </div>
                            <template v-if="f_temp_input.table_name != ''">
                                <div class="form-group">
                                    <label>字段名</label>
                                    <select class="form-control"  v-model="f_temp_input.field" required>
                                        <template v-for="li in table_list" v-if="(li.table_prefix+li.table_name) == f_temp_input.table_name">
                                            <option v-for="fie in li.field" :value="fie">{{fie.comment}}-{{fie.name}}</option>
                                        </template>
                                    </select>
                                </div>
                            </template>
                            <template v-if="f_temp_input.table_name == ''">
                                <div class="form-group">
                                    <label>字段名</label>
                                    <input type="text" class="form-control" v-model="f_temp_input.field.comment" placeholder="字段名">
                                </div>
                                <div class="form-group">
                                    <label>字段</label>
                                    <input type="text" class="form-control" v-model="f_temp_input.field.name" placeholder="字段">
                                </div>
                                <div class="form-group">
                                    <label>类型</label>
                                    <select class="form-control"  v-model="f_temp_input.field.type" required>
                                        <option v-for="li in field_type" :value="li">{{li}}</option>
                                    </select>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">添加</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="nav flex-column nav-pills f_r_nav">
        <div class="nav_title">组件</div>
        <a class="nav-link" href="javascript:controller.add_input();">输入</a>
        <a class="nav-link" href="javascript:controller.add_validate();">验证器</a>
<!--        <a class="nav-link" href="javascript:void(0);">结果转换</a>-->
        <a class="nav-link" href="javascript:controller.add_error_msg();">错误提示</a>
        <a class="nav-link" href="javascript:controller.add_select();">查询</a>
        <a class="nav-link" href="javascript:controller.add_insert();">插入</a>
        <a class="nav-link" href="javascript:controller.add_update()">更新</a>
        <a class="nav-link" href="javascript:controller.add_delete();">删除</a>
        <a class="submit" href="javascript:controller.click_submit();">提交</a>
    </div>
</div>





        </main>
    </div>


</div>


<script type="text/javascript">
    //数据库表
    const controller = new Vue({
        el: '#controller',
        data: {
            controller_table_id: 0,
            base_data:[],
            table_list:[],
            model_list:[],
            person_list:[],
            validate_scene_list:[],
            method_type:['*','get','post','put','delete'],
            join_type:['INNER','LEFT','RIGHT','FULL'],
            select_type:['select','find','paginate'],
            field_type: ['VarChar','Int','TinyInt','Enum','Text','Date'],
            condition: ['>','=','<','<>','>=','<='],
            f_temp_input:{
                f_index: 0,
                is_back:true,
                table_name:'',
                field:{
                    comment:'',
                    name:'',
                    type:'',
                    enum:[],
                }
            },
            f_temp_insert:{
                table_name:'',
                field:{}
            },
            f_temp_delete:{
                table_name:'',
                field:{}
            },
            f_temp_select_field:[],
            f_temp_select_join_field:[],
            f_temp_select_join_condition:{
                join_alias_name:'',
                field:[]
            },
            function_list:[]
        },
        created() {
            this.get_list();
        },
        methods: {
            get_list() {
                const that = this;
                if(window.sessionStorage.getItem("controller_table_id") === null){
                    window.location.href="<?php echo url('/generate'); ?>";
                }
                that.table_id = window.sessionStorage.getItem("controller_table_id");
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_validate_base'); ?>",
                    type:"POST",
                    data:{
                        id: that.table_id
                    },
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.base_data = res.data;
                            that.get_table_list_all();
                        }else{
                            that.base_data = [];
                        }
                    },
                });
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_validate_scene_all_data'); ?>",
                    type:"POST",
                    data:{
                        table_id: that.table_id
                    },
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.validate_scene_list = res.data;
                        }else{
                            that.validate_scene_list = [];
                        }
                    },
                });
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_model_list'); ?>",
                    type:"GET",
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.model_list = res.data;
                        }else{
                            that.model_list = [];
                        }
                    },
                });
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_group_list'); ?>",
                    type:"GET",
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.group = res.data;
                        }else{
                            that.group = [];
                        }
                    },
                });
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_person_list'); ?>",
                    type:"GET",
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.person_list = res.data;
                        }else{
                            that.person_list = [];
                        }
                    },
                });
            },
            get_table_list_all(){
                const that = this;
                $.ajax({
                    url:"<?php echo url('/generate/Api/get_table_list_all'); ?>",
                    type:"POST",
                    data:{
                        model_id:this.base_data.model_id
                    },
                    async:true,
                    success:function (res) {
                        if (res.status){
                            that.table_list = res.data;
                        }else{
                            that.table_list = [];
                        }
                    },
                });
            },
            del_function_module(index){
                Vue.delete(this.function_list,index);
            },
            del_f_module_data(f_index,d_index){
                Vue.delete(this.function_list[f_index].data,d_index);
            },

            del_f_module_where(f_index,d_index){
                Vue.delete(this.function_list[f_index].where,d_index);
            },

            //添加组件 - 输入参数
            add_input(){
                const that = this;
                const data = {
                    type:'input',
                    return_name:'input',
                    data:[]
                };
                Vue.set(that.function_list,Object.keys(that.function_list).length,data);
            },

            f_input_modal(index){
                Vue.set(this.f_temp_input,'f_index',index);
                $('#f_input_add_var').modal('show');
                const table_name = this.base_data.table_prefix + this.base_data.table_name;
                Vue.set(this.f_temp_input,'table_name',table_name);
            },
            f_input_modal_hide(){
                $('#f_input_add_var').modal('hide');
            },

            input_add_field(event){
                event.preventDefault();
                const f_temp_input = this.f_temp_input;
                const data = {
                    is_back:f_temp_input.is_back,
                    table_name: f_temp_input.table_name,
                    comment: f_temp_input.field.comment,
                    field_name: f_temp_input.field.name,
                    field_type: f_temp_input.field.type,
                    enum:(f_temp_input.table_name===''?[]:f_temp_input.field.enum),
                };
                Vue.set(this.function_list[f_temp_input.f_index].data,Object.keys(this.function_list[f_temp_input.f_index].data).length,data);
                this.f_input_modal_hide();
                this.f_temp_input.field={};
            },

            //添加组件 - 数据插入 - insert
            add_insert(){
                const that = this;
                const data = {
                    type:'insert',
                    table_name:'',
                    data:[],
                    return_name:'add_re'
                };
                // {
                //     table_name:'',
                //     comment:'',
                //     field_name:'',
                //     field_type:'',
                //     root_var_name:'',
                //     root_field_name:'',
                //     enum:[],
                // }
                Vue.set(that.function_list,Object.keys(that.function_list).length,data);
            },
            insert_add_field(index){
                const that = this;
                const f_temp_insert = that.f_temp_insert;
                const data = {
                    table_name:that.function_list[index].table_name,
                    comment:f_temp_insert.field.comment,
                    field_name:f_temp_insert.field.name,
                    field_type:f_temp_insert.field.type,
                    root_var_name:'',
                    root_field_name:'',
                    enum:f_temp_insert.field.enum,
                };
                Vue.set(that.function_list[index].data,Object.keys(that.function_list[index].data).length,data);
            },

            //添加组件 - 删除数据 -delete
            add_delete(){
                const that = this;
                const data = {
                    type:'delete',
                    where:[],
                    return_name:'delete_re'
                };                        // {
                //     table_name:'',
                //     comment:'',
                //     field_name:'',
                //     field_type:'',
                //     condition:'',
                //     con_var_name:'',
                //     con_field_name:'',
                //     enum:[],
                // }
                Vue.set(that.function_list,Object.keys(that.function_list).length,data);
            },
            delete_add_where(index){
                const that = this;
                const f_temp_delete = that.f_temp_delete;
                const where = {
                    table_name:that.function_list[index].table_name,
                    comment:f_temp_delete.field.comment,
                    field_name:f_temp_delete.field.name,
                    field_type:f_temp_delete.field.type,
                    condition:'',
                    con_var_name:'',
                    con_field_name:'',
                    enum:f_temp_delete.field.enum,
                };
                Vue.set(that.function_list[index].where,Object.keys(that.function_list[index].where).length,where);
            },
            update_add_where(index){
                const that = this;
                const f_temp_delete = that.f_temp_delete;
                const where = {
                    table_name:f_temp_delete.table_name,
                    comment:f_temp_delete.field.comment,
                    field_name:f_temp_delete.field.name,
                    field_type:f_temp_delete.field.type,
                    condition:'',
                    con_var_name:'',
                    con_field_name:'',
                    enum:f_temp_delete.field.enum,
                };
                console.log(where);
                Vue.set(that.function_list[index].where,Object.keys(that.function_list[index].where).length,where);
            },
            //添加组件 - 更新数据 - update
            add_update(){
                const that = this;
                const data = {
                    type:'update',
                    table_name:'',
                    data:[],
                    where:[],
                    return_name:'update_re'
                };
                Vue.set(that.function_list,Object.keys(that.function_list).length,data);
            },
            //添加组件 - 查询数据 - select
            add_select(){
                const that = this;
                const data = {
                    type:'select',
                    select_type:'select',
                    table_name:'',
                    alias:"",
                    data:[],
                    join:[],
                    condition:[],
                    where:[],
                    return_name:'select_re'
                };
                Vue.set(that.function_list,Object.keys(that.function_list).length,data);
            },
            //select - 添加字段
            select_add_field(index){
                const table_name = this.function_list[index].table_name;
                const f_temp_select_field = this.f_temp_select_field;
                if (table_name === '' || f_temp_select_field.length===0){
                    return;
                }
                const data = {
                    is_back:true,
                    table_name:table_name,
                    comment:f_temp_select_field.comment,
                    field_name:f_temp_select_field.name,
                    field_type:f_temp_select_field.type,
                    enum:f_temp_select_field.enum,
                };
                Vue.set(this.function_list[index].data,Object.keys(this.function_list[index].data).length,data);
                Vue.set(this,'f_temp_select_field',[]);
            },
            //select - join
            select_add_join(index){
                const join = {
                        type:'LEFT',
                        table_name:'',
                        alias:'',
                        data:[],
                        condition:[],
                    };
                Vue.set(this.function_list[index].join,Object.keys(this.function_list[index].join).length,join);
            },
            del_f_join(index,j_i){
                Vue.delete(this.function_list[index].join,j_i);
            },
            del_f_select_join(index,j_i,i){
                Vue.delete(this.function_list[index].join[j_i].data,i);
            },
            add_f_select_join(index,j_i){
                const table_name = this.function_list[index].join[j_i].table_name;
                const alias = this.function_list[index].join[j_i].table_name;
                const field = this.f_temp_select_join_field;
                if (table_name === '' || alias==='' || field.length===0){
                    return;
                }
                const data = {
                    is_back:true,
                    table_name:table_name,
                    comment:field.comment,
                    field_name:field.name,
                    field_type:field.type,
                    enum:field.enum,
                };
                Vue.set(this.function_list[index].join[j_i].data,Object.keys(this.function_list[index].join[j_i].data).length,data);
                Vue.set(this,'f_temp_select_join_field',[]);
            },
            add_f_select_condition(index){
                const condition = this.f_temp_select_join_condition;
                if(condition.join_alias_name==='' || condition.field.length === 0){
                    return false;
                }
                const data = {
                    alias:condition.join_alias_name,
                    comment:condition.field.comment,
                    field:condition.field.field_name,
                    condition:'=',
                    left_var:'',
                    left_field:'',
                    type:condition.field.field_type,
                    enum:condition.field.enum
                };
                Vue.set(this.function_list[index].condition,Object.keys(this.function_list[index].condition).length,data);
                Vue.set(this.f_temp_select_join_condition,'field',[]);

            },
            del_f_select_condition(index,c_i){
                Vue.delete(this.function_list[index].condition,c_i);
            },

            //添加组件 - 错误提示 - error_msg
            add_error_msg(){
                const data = {
                    type:'error_msg',
                    hint:[
                        {
                            message:'',
                            where:[
                                {
                                    var_name:'',
                                    field_name:'',
                                    condition:'=',
                                    con_var_name:'',
                                    con_field_name:''
                                }
                            ]
                        }
                    ]
                };
                Vue.set(this.function_list,Object.keys(this.function_list).length,data);
            },

            add_f_error_msg(index){
                const msg = {
                    message:'',
                    where:[
                        {
                            var_name:'',
                            field_name:'',
                            condition:'=',
                            c_var_name:'',
                            c_field_name:''
                        }
                    ]
                };
                Vue.set(this.function_list[index].hint,Object.keys(this.function_list[index].hint).length,msg);
            },
            del_f_error_msg(index,h_i){
                Vue.delete(this.function_list[index].hint,h_i);
            },
            add_f_error_msg_where(index,h_i){
                const where = {
                    var_name:'',
                    field_name:'',
                    condition:'=',
                    c_var_name:'',
                    c_field_name:''
                };
                Vue.set(this.function_list[index].hint[h_i].where,Object.keys(this.function_list[index].hint[h_i].where).length,where);
            },
            del_f_error_msg_where(index,h_i,i){
                Vue.delete(this.function_list[index].hint[h_i].where,i)
            },


            //添加组件 -  校验 - validate
            add_validate(){
                const data = {
                        type:'validate',
                        input_name:'',
                        validate:'',
                        return_name:'validate_re'
                    };
                Vue.set(this.function_list,Object.keys(this.function_list).length,data);
            },

            //添加组件 - 结果转换 - res_change
            add_res_change(){
                const data = {
                    type:'res_change',
                    input_name:'',
                    data:[
                        {

                        }
                    ],
                    return_name:'change_data'
                };
                Vue.set(this.function_list,Object.keys(this.function_list).length,data);
            },



            click_submit(){
                $('#btn_submit').click();
            },
            submit_f_data(event){
                const that = this;
                event.preventDefault();
                let form = $('#new_function_form').serializeArray();
                let data = {};
                data['table_id'] = that.base_data.id;
                for (let i = 0;i<form.length;i++){
                    data[form[i].name]=form[i].value;
                }
                data['function_data'] = JSON.stringify(that.function_list);

                $.ajax({
                    url:"<?php echo url('/generate/Api/add_function_data'); ?>",
                    type:"POST",
                    data:data,
                    async:true,
                    success:function (res) {
                        if (res.status){
                            console.log('添加成功');
                            window.location.href="<?php echo url('/generate/Index/controller_list'); ?>";
                        }
                    },
                });
            }


        }
    })


</script>

</body>
</html>