@extends('admin.layout.admin')
@section("content")
<main id="main" class="main">
    
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section dashboard">
        <div class="row">
            
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            
           
                            
                            <div class="card-body">
                                <h5 class="card-title">Users <span>| Total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$user->count()}}</h6>
                                        
                                    </div>
                                </div>
            </div>

          </div>
        </div><!-- End Sales Card -->
        
        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
                
                
                
                <div class="card-body">
                    <h5 class="card-title">Product <span>| Total</span></h5>
                    
              <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{$product->count()}}</h6>
                        
                    </div>
                </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->
        
        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">
            
            <div class="card info-card customers-card">
                
                
                <div class="card-body">
                    <h5 class="card-title">Store <span>| Total</span></h5>
                    
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$store->count()}}</h6>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div><!-- End Customers Card -->
        
        <!-- Reports -->
        <div class="col-12">
          <div class="card">

           
            
            <div class="card-body">
                <h5 class="card-title">Reports By Category</span></h5>
                
                <!-- Line Chart -->
                <div id="reportsChart"></div>
                
                <script>
                document.addEventListener("DOMContentLoaded", () => {
                    fetch('/chart-data')
                        .then(response => response.json())
                        .then(data => {
                            const categories = data.map(item => item.category);
                            const counts = data.map(item => Math.round(item.count)); // Pastikan angka bulat (integer)

                            // Definisikan warna unik untuk setiap kategori
                            const colors = ['#4154f1', '#2eca6a', '#ff771d', '#ff4560', '#775dd0'];
                            console.log(categories.length);
                            console.log(counts);

                            var options = {
                                series: [{
                                    name: 'Products',
                                    data: counts
                                }],
                                chart: {
                                    height: 350,
                                    type: 'bar',
                                    toolbar: {
                                        show: true
                                    },
                                },
                                colors: colors.slice(0, categories.length), 
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    show: true,
                                    width: 2,
                                    colors: ['transparent']
                                },
                                xaxis: {
                                    categories: categories
                                },
                                yaxis: {
                                    title: {
                                        text: 'Jumlah Produk By Category'
                                    }
                                },
                                fill: {
                                    opacity: 1
                                },
                                tooltip: {
                                    y: {
                                        formatter: function (val) {
                                            return val + " Produk";
                                        }
                                    }
                                }
                            };

                            var chart = new ApexCharts(document.querySelector("#reportsChart"), options);
                            chart.render();
                        });
                });


            </script>

            </div>
            
        </div>
    </div><!-- End Reports -->
    


</div>
</div><!-- End Left side columns -->





</div>
</section>

</main><!-- End #main -->
@endsection