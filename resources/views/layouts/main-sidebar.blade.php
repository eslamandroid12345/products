<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
    <a href="#">
        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">قائمه المنتجات</span>
        </div>
        <div class="clearfix"></div>
    </a>
</li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> شجره العطور ترحب بكم  </li>

                    <!-- Grades-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-t">قائمه المنتجات</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('products.all')}}">عرض المنتجات</a></li>
                            <li><a href="{{route('products.create')}}">اضافه منتج جديد</a></li>
                            <li><a href="{{route('products.search')}}">قائمه البحث</a></li>
                            <li><a href="{{route('sliders.index')}}">قائمه الاعلانات</a></li>

                        </ul>
                    </li>



                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

