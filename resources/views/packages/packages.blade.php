<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Pricing Table</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{asset('packages/css/style.css')}}">
   </head>
   <body class="pricing-page">
      <!-- ==============================Pricing table // start================================= -->
      <section id="pricing-table">
         <div class="container">
            <div class="pricing-logo">
                <img src="{{asset('packages/img/logo.png')}}" alt="logo">
            </div>
            <div class="row">
                @forelse($data as $membership)
               <div class="col-md-3 col-sm-6">
                  <div class="pricingTable10">
                     <div class="pricingTable-header">
                        <h3 class="heading">{{ucfirst($membership->package->title)}}</h3>
                        <span class="price-value">
                        <span class="currency">$</span> {{$membership->package->price}}
                        <span class="month">/mo</span>
                        </span>
                     </div>
                     <div class="pricing-content">
                        <ul>
                           <li>{{$membership->voice_type}} Voice Type</li>
                           <li>{{$membership->characters_length}}  Characters Limit</li>
                           <li>{{$membership->package->description}}</li>
                           <li>@forelse($membership->languages as $language) {{$language->name}}@empty @endforelse</li>
                          
                        </ul>
                          <form >
                           <a href="{{config('services.clickBank.baseLink').$membership->package->sku}}" target="_blank" id='subscribepackages' class="read" packageid='{{$membership->package->Id}}'>Subscribe</a>
                        </form>
                      
                     </div>
                  </div>
               </div>
               @empty
                <div class="text-xs-center">
                    No,Package Found
                    <!-- <p><a href="{{route('home')}}">Go To Home</a></p> -->
                </div>
                @endforelse
             
            </div>
         </div>
      </section>
      <!-- ==============================Pricing table // end================================= -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
</html>