@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')

  <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('assets1/css/style.css.map') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('assets1/css/style.min.css') }}"> --}}
<style>
        .tm_primary_color,
    .tm_accent_border_20,
    .tm_mb0,
    .tm_text_center,
    .tm_m0 {
      color: #111 !important;
    }
    .tm_invoice_btn.tm_color3 {
    background-color: #007bff; /* Blue for edit */
    color: #fff;
    border: none;
}



    .tm_container{padding: 0 !important;}
</style>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">


<style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24
    }
    </style>





  <div class="tm_container">
    <div class="tm_invoice_wrap">
      <div class="tm_invoice tm_style2 tm_type1 tm_accent_border tm_radius_0 tm_small_border" id="tm_download_section">
        <div class="tm_invoice_in">
          <!-- Invoice Header -->
          <div class="tm_invoice_head tm_mb20 tm_m0_md">
            <div class="tm_invoice_left">
              <div class="tm_logo">
                <img src="{{ asset('assets1/img/logo_accent.svg')}}" alt="Logo">
              </div>
            </div>
            <div class="tm_invoice_right">
              <div class="tm_grid_row tm_col_3">
                <div class="tm_text_center">
                  <p class="tm_accent_color tm_mb0">
                    <!-- Icon 1 -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 512 512" fill="currentColor">
                      <path d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336
                               a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112
                               a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18
                               -104.36a16 16 0 0119.64 25.26z"/>
                    </svg>
                  </p>
                  support@gmail.com <br>
                  jobs@gmail.com
                </div>
                <div class="tm_text_center">
                  <p class="tm_accent_color tm_mb0">
                    <!-- Icon 2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 512 512" fill="currentColor">
                      <path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38
                               C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13
                               C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93
                               -.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16
                               18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71
                               0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28
                               12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72
                               45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66
                               -7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18
                               9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81
                               3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01
                               -15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z"/>
                    </svg>
                  </p>
                  +99(0) 131 124 567 <br>
                  Monday to Friday
                </div>
                <div class="tm_text_center">
                  <p class="tm_accent_color tm_mb0">
                    <!-- Icon 3 -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 512 512" fill="currentColor">
                      <circle cx="256" cy="192" r="32"/>
                      <path d="M256 32c-88.22 0-160 68.65-160 153 0 40.17 18.31 93.59 54.42
                               158.78 29 52.34 62.55 99.67 80 123.22a31.75 31.75 0 0051.22 0c17.42
                               -23.55 51-70.88 80-123.22C397.69 278.61 416 225.19 416 185c0-84.35
                               -71.78-153-160-153zm0 224a64 64 0 1164-64 64.07 64.07 0 01-64 64z"/>
                    </svg>
                  </p>
                  9 Paul Street, London <br>
                  England EC2A 4NE
                </div>
              </div>
            </div>
            <div class="tm_shape_bg tm_accent_bg_10 tm_border tm_accent_border_20"></div>
          </div>

          <!-- Invoice Info -->
          <div class="tm_invoice_info tm_mb30 tm_align_center">
            <div class="tm_invoice_info_left tm_mb20_md">
                @php
                    $subtotal = array_sum($invoice->milestone_amount); // Calculate subtotal
                    $discountRate = $invoice->discount_amount ?? 0;    // Fetch discount rate
                    $discount = ($subtotal * $discountRate) / 100;    // Calculate discount amount
                    $grandTotal = $subtotal - $discount;             // Calculate grand total
                @endphp
                <p class="tm_mb0">
                    <b class="tm_primary_color">Invoice No: </b>#{{ $invoice->id }} <br>
                    <b class="tm_primary_color">Invoice Date: </b>{{ $invoice->created_at->format('d F Y') }} <br>
                    <b class="tm_primary_color">Grand Total: </b>${{ number_format($grandTotal, 2) }}
                </p>
            </div>
            <div class="tm_invoice_info_right">
                <div class="tm_border tm_accent_border_20 tm_radius_0 tm_accent_bg_10 tm_curve_35 tm_text_center">
                    <div>
                        <b class="tm_accent_color tm_f26 tm_medium tm_body_lineheight">
                            Grand Total: ${{ number_format($grandTotal, 2) }}
                        </b>
                    </div>
                </div>
            </div>
        </div>
        
        
        

          <!-- Invoice To -->
          <h2 class="tm_f16 tm_section_heading tm_accent_border_20 tm_mb0">
            <span class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border 
                         tm_accent_border_20 tm_border_bottom_0 tm_accent_color">
              <span>Invoice To</span>
            </span>
          </h2>

          <!-- Client Info Table -->
          <div class="tm_table tm_style1 tm_mb30">
            <div class="tm_border tm_accent_border_20 tm_border_top_0">
                <div class="tm_table_responsive">
                    <table>
                        <tbody>
                            <tr>
                                <td class="tm_width_6 tm_border_top_0">
                                    <b class="tm_primary_color tm_medium">Name: </b>{{ $invoice->client_name }}
                                </td>
                                <td class="tm_width_6 tm_border_top_0 tm_border_left tm_accent_border_20">
                                    <b class="tm_primary_color tm_medium">Phone: </b>{{ $invoice->phone ?? 'N/A' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="tm_width_6 tm_accent_border_20">
                                    <b class="tm_primary_color tm_medium">Email: </b>{{ $invoice->email }}
                                </td>
                                <td class="tm_width_6 tm_border_left tm_accent_border_20">
                                    <b class="tm_primary_color tm_medium">Address: </b>{{ $invoice->address ?? 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

          <!-- Invoice Items Table -->
         
          <div class="tm_table tm_style1">
            <div class="tm_border tm_accent_border_20">
                <div class="tm_table_responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="tm_width_3 tm_semi_bold tm_accent_color tm_accent_bg_10">Milestone</th>
                                <th class="tm_width_4 tm_semi_bold tm_accent_color tm_accent_bg_10">Description</th>
                                <th class="tm_width_2 tm_semi_bold tm_accent_color tm_accent_bg_10">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $subtotal = 0;
                                $discountRate = $invoice->discount_amount ?? 0; // Ensure discount rate is provided
                            @endphp
                            @if (is_array($invoice->milestone_name) && is_array($invoice->milestone_date) && is_array($invoice->milestone_amount))
                                @foreach ($invoice->milestone_name as $key => $milestone_name)
                                    @php
                                        $amount = $invoice->milestone_amount[$key] ?? 0;
                                        $subtotal += $amount; // Accumulate subtotal
                                    @endphp
                                    <tr>
                                        <td class="tm_width_3 tm_accent_border_20">{{ $key + 1 }}. {{ $milestone_name }}</td>
                                        <td class="tm_width_4 tm_accent_border_20">{{ $invoice->milestone_date[$key] ?? 'N/A' }}</td>
                                        <td class="tm_width_2 tm_accent_border_20 tm_text_right">
                                            ${{ number_format($amount, 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="tm_width_3 tm_accent_border_20 tm_text_center">No milestones found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        
            <!-- Footer Calculation -->
            <div class="tm_invoice_footer tm_mb15 tm_m0_md">
                <div class="tm_left_footer">
                    <p class="tm_mb2">
                        <b class="tm_primary_color">Payment info:</b>
                    </p>
                    <p class="tm_m0">
                        {{ $invoice->client_name ?? 'John Doe' }} <br>
                        Credit Card: {{ $invoice->bank_account_number ?? 'N/A' }} <br>
                        Amount: ${{ number_format($subtotal - ($subtotal * $discountRate / 100), 2) }}
                    </p>
                </div>
                <div class="tm_right_footer">
                    @php
                        $discount = ($subtotal * $discountRate) / 100;
                        $grandTotal = $subtotal - $discount;
                    @endphp
                    <table class="tm_mb15 tm_m0_md">
                        <tbody>
                            <tr>
                                <td class="tm_width_3 tm_primary_color tm_border_none tm_medium">Subtotal</td>
                                <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_medium">
                                    ${{ number_format($subtotal, 2) }}
                                </td>
                            </tr>
                            <tr>
                                <td class="tm_width_3 tm_danger_color tm_border_none tm_pt0">
                                    Discount ({{ $discountRate }}%)
                                </td>
                                <td class="tm_width_3 tm_danger_color tm_text_right tm_border_none tm_pt0">
                                    -${{ number_format($discount, 2) }}
                                </td>
                            </tr>
                            <tr>
                                <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0">Tax 0%</td>
                                <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0">
                                    $0.00
                                </td>
                            </tr>
                            <tr class="tm_accent_border_20 tm_border">
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_accent_bg_10">
                                    Grand Total
                                </td>
                                <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_text_right tm_accent_bg_10">
                                    ${{ number_format($grandTotal, 2) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
            <!-- Signature Section -->
            <div class="tm_invoice_footer tm_type1">
                <div class="tm_left_footer"></div>
                <div class="tm_right_footer">
                    <div class="tm_sign tm_text_center">
                        <img src="{{ asset('assets1/img/sign.svg') }}" alt="Sign">
                        <p class="tm_m0 tm_ternary_color">{{ $invoice->contact_person ?? 'John Donate' }}</p>
                        <p class="tm_m0 tm_f16 tm_primary_color">Accounts Manager</p>
                    </div>
                </div>
            </div>
        </div>
        






























          <!-- Bottom Invoice -->
          <div class="tm_bottom_invoice tm_accent_border_20">
            <div class="tm_bottom_invoice_left">
                <p class="tm_m0 tm_f18 tm_accent_color tm_mb5">
                    Thank you for your business.
                </p>
                <p class="tm_primary_color tm_f12 tm_m0 tm_bold">Terms & Conditions</p>
                <p class="tm_m0 tm_f12">
                    {{ $invoice->terms_conditions ?? 'Invoice was created on a computer and is valid without the signature and seal.' }}
                </p>
            </div>
            <div class="tm_bottom_invoice_right tm_mobile_hide">
                <div class="tm_logo">
                    <img src="{{ asset($invoice->logo_path ?? 'assets/img/logo_accent.svg') }}" alt="Logo">
                </div>
            </div>
        </div>
        
        </div>
      </div>

      <!-- Print / Download Buttons -->
      <div class="tm_invoice_btns tm_hide_print">
        <!-- Print Button -->
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
            <span class="tm_btn_icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104
                             a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none"
                          stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" 
                          fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" 
                          fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/>
                    <circle cx="392" cy="184" r="24" fill="currentColor"/>
                </svg>
            </span>
            <span class="tm_btn_text">Print</span>
        </a>
    
        <!-- Download Button -->
        <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
            <span class="tm_btn_icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6
                             C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2
                             -60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9
                             64-63.9M256 224v224.03" fill="none" stroke="currentColor"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                </svg>
            </span>
            <span class="tm_btn_text">Download</span>
        </button>
    
        <!-- Edit Button -->
        <a href="{{ route('admin.invoices.edit', $invoice->id ?? '') }}" class="tm_invoice_btn tm_color3">
            <span class="tm_btn_icon">
                <i class="material-icons-outlined">edit</i>
            </span>
            <span class="tm_btn_text">Edit</span>
        </a>
        
    </div>
    
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets1/js/jspdf.min.js') }}"></script>
  <script src="{{ asset('assets1/js/html2canvas.min.js') }}"></script>

 
  <script>
    (function ($) {
        'use strict';
    
        $('#tm_download_btn').on('click', function () {
            // Show loader overlay
            $('#loader').show();
    
            // Grab the invoice DOM element
            const downloadSection = $('#tm_download_section')[0];
    
            // Scale factor for balanced quality and size
            const scaleFactor = 15; // Lower the scale to reduce image resolution and size
    
            // Start html2canvas
            html2canvas(downloadSection, {
                scale: scaleFactor, // Use a lower scale for smaller output size
                useCORS: true,
                scrollX: 0,
                scrollY: 0,
            }).then(function (canvas) {
                // Convert canvas to a PNG data URL with optimized quality
                const imgData = canvas.toDataURL('image/jpeg', 1); // Use JPEG for better compression (80% quality)
    
                // Calculate the rendered size in px (after scaling)
                const renderedWidth = canvas.width;
                const renderedHeight = canvas.height;
    
                // Create jsPDF with page size matching the canvas
                const pdf = new jsPDF('p', 'pt', [renderedWidth, renderedHeight]);
    
                // Add the image at its full size
                pdf.addImage(imgData, 'JPEG', 0, 0, renderedWidth, renderedHeight);
    
                // Start the download
                pdf.save('CodeFixxer_Invoice.pdf');
    
                // Hide the loader
                $('#loader').hide();
            });
        });
    })(jQuery);
    </script>
    
@endsection
