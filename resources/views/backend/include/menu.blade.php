
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="index.html" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="mailbox.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <!-- Manage Brand Start -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Brands</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageBrand')}}" class="sub-link">All Brands</a></li>
            <li class="sub-item"><a href="{{route('createBrand')}}" class="sub-link">Add New Brand</a></li>
          </ul>
        </li>
        <!-- Manage Brand end -->

        <!-- Manage Category Start -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Categories</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('manageCategory')}}" class="sub-link">All Categories</a></li>
            <li class="sub-item"><a href="{{route('createCategory')}}" class="sub-link">Add New Category</a></li>
          </ul>
        </li>
        <!-- Manage Category end -->

        <!-- Manage Product Start -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{ Request::is('products*') ? 'show-sub' : ''}}">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Products</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub {{ Request::is('products*') ? 'd-block' : ''}}">
            <li class="sub-item"><a href="{{route('manageProduct')}}" class="sub-link">All Products</a></li>
            <li class="sub-item"><a href="{{route('createProduct')}}" class="sub-link">Add New Product</a></li>
          </ul>
        </li>
        <!-- Manage Product end -->

        <!-- Manage Division Start -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{ Request::is('divisions*') ? 'show-sub' : ''}}">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Divisions</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub {{ Request::is('divisions*') ? 'd-block' : ''}}">
            <li class="sub-item"><a href="{{route('manageDivision')}}" class="sub-link">All Divisions</a></li>
            <li class="sub-item"><a href="{{route('createDivision')}}" class="sub-link">Add New Division</a></li>
          </ul>
        </li>
        <!-- Manage Division end -->

        <!-- Manage District Start -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{ Request::is('districts*') ? 'show-sub' : ''}}">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Manage Districts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub {{ Request::is('districts*') ? 'd-block' : ''}}">
            <li class="sub-item"><a href="{{route('manageDistrict')}}" class="sub-link">All Districts</a></li>
            <li class="sub-item"><a href="{{route('createDistrict')}}" class="sub-link">Add New District</a></li>
          </ul>
        </li>
        <!-- Manage District end -->

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">Navigation</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="navigation.html" class="sub-link">Basic Nav</a></li>
            <li class="sub-item"><a href="navigation-layouts.html" class="sub-link">Nav Layouts</a></li>
            <li class="sub-item"><a href="navigation-effects.html" class="sub-link">Nav Effects</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="chart-morris.html" class="sub-link">Morris Charts</a></li>
            <li class="sub-item"><a href="chart-flot.html" class="sub-link">Flot Charts</a></li>
            <li class="sub-item"><a href="chart-chartjs.html" class="sub-link">Chart JS</a></li>
            <li class="sub-item"><a href="chart-echarts.html" class="sub-link">ECharts</a></li>
            <li class="sub-item"><a href="chart-rickshaw.html" class="sub-link">Rickshaw</a></li>
            <li class="sub-item"><a href="chart-chartist.html" class="sub-link">Chartist</a></li>
            <li class="sub-item"><a href="chart-sparkline.html" class="sub-link">Sparkline</a></li>
            <li class="sub-item"><a href="chart-peity.html" class="sub-link">Peity</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="form-elements.html" class="sub-link">Form Elements</a></li>
            <li class="sub-item"><a href="form-layouts.html" class="sub-link">Form Layouts</a></li>
            <li class="sub-item"><a href="form-validation.html" class="sub-link">Form Validation</a></li>
            <li class="sub-item"><a href="form-wizards.html" class="sub-link">Form Wizards</a></li>
            <li class="sub-item"><a href="form-editor-code.html" class="sub-link">Code Editor</a></li>
            <li class="sub-item"><a href="form-editor-text.html" class="sub-link">Text Editor</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="table-basic.html" class="sub-link">Basic Table</a></li>
            <li class="sub-item"><a href="table-datatable.html" class="sub-link">Data Table</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="map-google.html" class="sub-link">Google Maps</a></li>
            <li class="sub-item"><a href="map-leaflet.html" class="sub-link">Leaflet Maps</a></li>
            <li class="sub-item"><a href="map-vector.html" class="sub-link">Vector Maps</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-color-filter-outline tx-24"></i>
            <span class="menu-item-label">Skins</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="skin-select2.html" class="sub-link">Select2</a></li>
            <li class="sub-item"><a href="skin-rangeslider.html" class="sub-link">Ion RangeSlider</a></li>
            <li class="sub-item"><a href="skin-input-form.html" class="sub-link">Textbox Form</a></li>
            <li class="sub-item"><a href="skin-file-browser.html" class="sub-link">File Browser</a></li>
            <li class="sub-item"><a href="skin-datepicker.html" class="sub-link">Datepicker</a></li>
            <li class="sub-item"><a href="skin-template.html" class="sub-link">Template</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Utilities</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="background.html" class="sub-link">Background</a></li>
            <li class="sub-item"><a href="border.html" class="sub-link">Border</a></li>
            <li class="sub-item"><a href="height.html" class="sub-link">Height</a></li>
            <li class="sub-item"><a href="margin.html" class="sub-link">Margin</a></li>
            <li class="sub-item"><a href="padding.html" class="sub-link">Padding</a></li>
            <li class="sub-item"><a href="position.html" class="sub-link">Position</a></li>
            <li class="sub-item"><a href="typography-util.html" class="sub-link">Typography</a></li>
            <li class="sub-item"><a href="width.html" class="sub-link">Width</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Apps &amp; Pages</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="layouts.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Layouts</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="sitemap.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Sitemap</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>
    </div><!-- br-sideleft -->