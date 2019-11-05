<?php
$title = "HSPL - Best & Cheapest Hosting In INDIA";
$description = "HSPL - Best & Cheapest Hosting In INDIA";
include'head.php';
include'nav.php';
?>
  <div class="top-header item7 overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="wrapper">
            <h1 class="heading">Dedicated Servers</h1>
            <h3 class="subheading">High performance dedicated servers with cloud flexibility and scalability.<br>
            <a href="#features" class="golink gocheck"> <small>Features</small> </a> <small class="c-white">&#9679;</small>
            <a href="#addons" class="golink gocheck"> <small>Add-Ons</small> </a> <small class="c-white">&#9679;</small>
            <a href="#highlights" class="golink gocheck"> <small>Highlights</small></a>
            </h3>
            <a class="btn btn-default-pink-fill cd-filter-trigger wow animated shake delay-2s"><i class="fa fa-filter"></i> Show Filter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** CONTROLS ***** -->
  <section class="cd-main-content sec-up wow animated fadeInUp fast">
    <div class="cd-filter">
      <form>
        <div class="container">
          <div class="sec-main pb-5 sec-bg1">
            <div class="plans badge feat bg-pink">filter</div>
            <div class="row">
              <a href="#0" class="cd-close"><i class="fas fa-long-arrow-alt-left"></i></a>
              <div class="col-md-6">
                <div class="cd-filter-block">
                  <h4>Choose Server</h4>
                  <ul class="radio-group radios-filter cd-filter-content list">
                    <li>
                      <input value="all" type="radio" name="radioButton" id="radio1" checked/>
                      <label class="radio-label" for="radio1">All Servers</label>
                    </li>
                    <li>
                      <input value=".linux" type="radio" name="radioButton" id="radio2">
                      <label class="radio-label" for="radio2">Linux</label>
                    </li>
                    <li>
                      <input value=".windows" type="radio" name="radioButton" id="radio3">
                      <label class="radio-label" for="radio3">Windows</label>
                    </li>
                    <li>
                      <input value=".managed" type="radio" name="radioButton" id="radio4">
                      <label class="radio-label" for="radio4">Managed</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cd-filter-block">
                  <h4>Location</h4>
                  <div class="cd-filter-content cd-select">
                    <select class="select-filter">
                      <option value="all">Select Datacenter</option>
                      <option value=".data1">New York</option>
                      <option value=".data2">Montreal</option>
                      <option value=".data3">Portugal</option>
                      <option value=".data4">London</option>
                      <option value=".data5">Moscow</option>
                      <option value=".data6">Hong Kong</option>
                      <option value=".data7">Singapure</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cd-filter-block checkbox-group">
                  <h4>CPU Cores</h4>
                  <ul class="cd-filter-content cd-filters list">
                    <li>
                      <input class="filter" value=".cores2" type="checkbox" id="checkbox1">
                      <label class="checkbox-label" for="checkbox1">2</label>
                    </li>
                    <li>
                      <input class="filter" value=".cores4" type="checkbox" id="checkbox2">
                      <label class="checkbox-label" for="checkbox2">4</label>
                    </li>
                    <li>
                      <input class="filter" value=".cores6" type="checkbox" id="checkbox3">
                      <label class="checkbox-label" for="checkbox3">6</label>
                    </li>
                    <li>
                      <input class="filter" value=".cores8" type="checkbox" id="checkbox4">
                      <label class="checkbox-label" for="checkbox4">8</label>
                    </li>
                    <li>
                      <input class="filter" value=".cores12" type="checkbox" id="checkbox5">
                      <label class="checkbox-label" for="checkbox5">12</label>
                    </li>
                    <li>
                      <input class="filter" value=".cores16" type="checkbox" id="checkbox6">
                      <label class="checkbox-label" for="checkbox6">16</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cd-filter-block">
                  <h4>RAM</h4>
                  <div class="cd-filter-content cd-filters list">
                    <datalist id="sizeLegend">
                    <option value="0"> 16</option>
                    <option value="1"> 32</option>
                    <option value="2"> 64</option>
                    <option value="3"> 96</option>
                    <option value="4"> 128</option>
                    <option value="5"> 256</option>
                    </datalist>
                    <div class="range-slider">
                      <input name="minSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="0" list="sizeLegend"/>
                    </div>
                    <div class="range-slider">
                      <input name="maxSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="5" list="sizeLegend"/>
                    </div>
                  </div>
                  <div class="search-disabled">
                    <input type="text" class="input" data-ref="input-search" placeholder="Enter a domain extension (.com)"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- ***** FILTER PLANS ***** -->
  <div class="mixcontainer pb-5 pt-4 sec-bg2 motpath" data-ref="container">
    <div class="container ">
      <div class="pricing special">
        <div class="p-0 m-0">
          <div class="mix linux data1 cores2" data-size="0">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-grey">linux</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/linuxserver.svg" alt="linux">
                <div class="title">Intel Xeon E3-1231 v5 / 4x 3.20Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>82.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-pink">
                <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>16GB (up to 32GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
                <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
              </ul>
            </div>
          </div>
          <div class="mix windows data2 cores4" data-size="1">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-grey">windows</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/windowserver.svg" alt="windows">
                <div class="title">Intel Xeon E3-1230 v6 / 6x 3.20Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>133.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-purple">
                <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>6x 3.20Ghz 4 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>32GB (up to 64GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.0</span></li>
                <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
              </ul>
            </div>
          </div>
          <div class="mix managed data3 cores6" data-size="2">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-pink">special</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/managedserver.svg" alt="managed">
                <div class="title">Intel Xeon E3-1231 v6 / 8x 3.30Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>184.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-pink">
                <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>8x 3.30Ghz 6 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>64GB (up to 96GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
                <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
              </ul>
            </div>
          </div>
          <div class="mix linux data4 cores8" data-size="3">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-grey">linux</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/linuxserver.svg" alt="linux">
                <div class="title">Intel Xeon E3-1231 v5 / 8x 3.40Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>159.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-purple">
                <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>8x 3.40Ghz 8 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>96GB (up to 128GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>4 x 1TB SATA 3.0</span></li>
                <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
              </ul>
            </div>
          </div>
          <div class="mix windows data5 cores12" data-size="4">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-grey">windows</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/windowserver.svg" height="65" alt="windows">
                <div class="title">Intel Xeon E3-1230 v6 / 8x 3.20Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>199.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-pink">
                <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>8x 3.20Ghz 12 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>128GB (up to 265GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>4 x 2TB SATA 3.0</span></li>
                <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
              </ul>
            </div>
          </div>
          <div class="mix managed data6 cores16" data-size="4">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-grey">managed</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/managedserver.svg" alt="managed">
                <div class="title">Intel Xeon E3-1231 v6 / 8x 3.30Ghz</div>
                <div class="fromer">Excepteur sint occaecat cupidatat non proident dolor</div>
                <div class="price"><sup>$</sup>184.00 <span class="period">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Configure</a>
              </div>
              <ul class="list-info bg-purple">
                <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>8x 3.30Ghz 16 Cores</span></li>
                <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>256GB (up to 512GB)</span></li>
                <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
                <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
              </ul>
            </div>
          </div>
          <div class="gap"></div>
          <div class="gap"></div>
          <div class="gap"></div>
        </div>
      </div>
      <div class="cd-fail-message">" No items could be found matching the criteria "</div>
    </div>
  </div>
  <!-- ***** FEATURES ***** -->
  <section id="features" class="history-section sec-normal">
    <div class="container">
      <div class="randomline">
        <div class="bigline"></div>
        <div class="smallline"></div>
      </div>
      <div class="sec-main sec-bg1">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="info-content">
              <h4>SO Installation</h4>
              <p>A....</p>
            </div>
          </div>
          <div class="col-md-10 offset-md-1 pt-5 wow animated fadeInUp fast">
            <img class="svg" src="patterns/os.svg" alt="dns redundant">
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="info-content">
              <h4>Maximum Performance</h4>
              <p>B...</p>
            </div>
          </div>
          <div class="col-md-10 offset-md-1 pt-5 wow animated fadeInUp fast">
            <img class="svg" src="patterns/ssd.svg" alt="dns redundant">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
<?php include'parts/add-ons.php';?>


  <section class="sec-normal sec-bg1">
    <div class="best-plans pricing">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section-heading">Dedicated Technical Specifications</h2>
            <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          </div>
          <div class="col-sm-12">
            <div class="table-responsive-lg">
              <table class="table sample mt-5">
                <thead>
                  <tr><td><span class="title">Features </span></td><td><div class="title">Performance</div></td><td><div class="title">Boosters</div></td></tr>
                </thead>
                <tbody>
                  <tr><td><div class="title-table" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="fas fa-check-circle mr-2 f-20"></span> Instant Provisioning</div></td><td><span class="fas fa-check-circle mr-2 f-20"></span> Intel Xeon</td><td><span class="fas fa-check-circle mr-2 f-20"></span> Free cPanel</td></tr>

                  <tr><td><div class="title-table" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="fas fa-check-circle mr-2 f-20"></span> CentOS / Ubuntu</div></td><td><span class="fas fa-check-circle mr-2 f-20"></span> SuperMicro</td><td><span class="fas fa-check-circle mr-2 f-20"></span> WHMCS</td></tr>
              
              <tr>
                <td class="title-table"><span class="fas fa-check-circle mr-2"></span> CloudLinux</td>
                <td><span class="fas fa-check-circle mr-2 f-20"></span> Juniper Networks</td>
                <td><span class="fas fa-check-circle mr-2 f-20"></span> IPs</td>
              </tr>
              <tr>
                <td class="title-table"><span class="fas fa-check-circle mr-3"></span> Server Rebuild</td>
                <td><span class="fas fa-check-circle mr-2 f-20"></span> DDos mitigation</td>
                <td><span class="fas fa-check-circle mr-2 f-20"></span> SAN storage</td>
              </tr>
              <tr>
                <td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td>
                <td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td>
                <td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<section id="highlights" class="sec-normal best-plans pricing sec-grad-yellow-to-grey-left">
<img class="path-left" src="patterns/cpupath.svg" alt="">
<div class="container">
  <div class="sec-main sec-bg1">
    <div class="plans badge feat bg-pink">highlights</div>
    <div class="row">
      
      <div class="col-sm-12">
        <div class="table-responsive-lg">
          
          <table class="table compare">
            <thead>
              <tr>
                <td class="bb-green title">Dedicated Processors</td>
                <td class="bb-green title">Memory</td>
                <td class="bb-green title">Storage</td>
                <td class="bb-green title">Monthly</td>
                <td class="bb-green title">Availability</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="badge bg-pink mr-1">HOT</div> E3-1230 v3 3.3GHz Haswell | 4 Cores</td>
                <td>32GB</td>
                <td>320GB SSD</td>
                <td><span class="ltgh">$99.00</span>  <b class="c-black">$59.00</b></td>
                <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
              </tr>
              <tr>
                <td><div class="badge bg-pink mr-1">SALE</div> E3-1230 v5 3.4GHz Skylake | 4 Cores</td>
                <td>32GB</td>
                <td>520GB SSD</td>
                <td><span class="ltgh">$177.00</span>  <b class="c-black">$120.00</b></td>
                <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
              </tr>
              <tr>
                <td><div class="badge bg-grey mr-1">OUT</div> E3-1230 v5 3.4GHz Skylake | 8 Cores</td>
                <td>64GB</td>
                <td>960GB SSD</td>
                <td><b class="c-black">$239.00</b></td>
                <td><a href="" class="btn btn-default-fill disabled">Sold out</a></td>
              </tr>
              <tr>
                <td class="border-0">2x E5-2620 v4 2.1GHz Broadwell | 16 Cores</td>
                <td class="border-0">128GB</td>
                <td class="border-0">4x 960GB SSD</td>
                <td class="border-0"><b class="c-black">$410.00</b></td>
                <td class="border-0"><a href="" class="btn btn-default-yellow-fill">Config</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="help pt-4 pb-80">
<div class="container">
  <div class="service-wrap">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="help-container">
          <div class="plans badge feat left bg-grey"><i class="fas fa-long-arrow-alt-left"></i></div>
          <a href="hosting" class="help-item">
            <div class="img">
              <img class="svg ico" src="fonts/svg/cloudfiber.svg" alt="">
            </div>
            <div class="inform">
              <div class="title">Go to Cloud Reseller</div>
              <div class="description">Do you need to host multiple Websites?</div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="help-container">
          <div class="plans badge feat bg-grey"><i class="fas fa-long-arrow-alt-right"></i></div>
          <a href="vps" class="help-item">
            <div class="img">
              <img class="svg ico" src="fonts/svg/vps.svg" alt="">
            </div>
            <div class="inform">
              <div class="title">Go to VPS Server</div>
              <div class="description">Needs scalable resources in Hosting Environment?</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php 
include'parts/faq/faq-dedicated.php';
include'foot.php';
?>