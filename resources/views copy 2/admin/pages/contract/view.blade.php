@extends('admin.layouts.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')
    @php
        // Decode milestone arrays
        $milestoneNames = $contract->milestone_name ? json_decode($contract->milestone_name, true) : [];
        $milestoneDescs = $contract->milestone_desc ? json_decode($contract->milestone_desc, true) : [];
        $milestoneDates = $contract->milestone_date ? json_decode($contract->milestone_date, true) : [];
        $milestoneAmounts = $contract->milestone_amount ? json_decode($contract->milestone_amount, true) : [];

        // Compute total if you'd like to sum milestone amounts
        $totalAmount = 0;
        foreach ($milestoneAmounts as $amt) {
            $totalAmount += floatval($amt);
        }
    @endphp


    <link rel="stylesheet" href="{{ asset('public/assets1/css/style.css') }}">
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
    <style>
        .tm_primary_color,
        .tm_accent_border_20,
        .tm_mb0,
        .tm_text_center,
        .tm_m0 {
            color: #111 !important;
        }

        .tm_invoice_btn.tm_color3 {
            background-color: #007aff;
            /* Blue for edit */
            color: #fff;
            border: none;
        }

        .tm_invoice_btn.tm_color3:hover {
            /* background-color: #0056b3;
    color: #fff; */

        }

        .tm_container {
            padding: 0 !important;
        }
        svg{color: #007aff}

        /* *{font-family: Roboto, Poppins} */
    </style>






    <div class="tm_container">
        <div class="tm_invoice_wrap">

            <!-- Contract (mirroring your invoice structure) -->
            <div class="tm_invoice tm_style2 tm_type1 tm_accent_border tm_radius_0 tm_small_border" id="tm_download_section">
                <div class="tm_invoice_in">

                    <!-- Top Section: Logo + Header Info -->
                    <div class="tm_invoice_head tm_mb20 tm_m0_md">
                        <div class="tm_invoice_left">
                            <div class="tm_logo">
                                <!-- Replace with your contract or company logo -->
                                <img src="{{ asset('public/assets/img/logo_accent.svg') }}" alt="Logo">
                            </div>
                        </div>
                        <div class="tm_invoice_right">
                            <div class="tm_grid_row tm_col_3">
                                <div class="tm_text_center">
                                    <p class="tm_accent_color tm_mb0">
                                        <!-- Example icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 512 512" fill="currentColor">
                                            <path
                                                d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z" />
                                        </svg>
                                    </p>
                                    support@email.com
                                    <br>
                                    info@yourcompany.com
                                </div>
                                <div class="tm_text_center">
                                    <p class="tm_accent_color tm_mb0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 512 512" fill="currentColor">
                                            <path
                                                d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z" />
                                        </svg>
                                    </p>
                                    +99 (0) 131 124 567
                                    <br>
                                    Monday to Friday
                                </div>
                                <div class="tm_text_center">
                                    <p class="tm_accent_color tm_mb0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 512 512" fill="currentColor">
                                            <circle cx="256" cy="192" r="32" />
                                            <path
                                                d="M256 32c-88.22 0-160 68.65-160 153 0 40.17 18.31 93.59 54.42 158.78 29 52.34 62.55 99.67 80 123.22a31.75 31.75 0 0051.22 0c17.42-23.55 51-70.88 80-123.22C397.69 278.61 416 225.19 416 185c0-84.35-71.78-153-160-153zm0 224a64 64 0 1164-64 64.07 64.07 0 01-64 64z" />
                                        </svg>
                                    </p>
                                    9 Paul Street, London
                                    <br>
                                    England EC2A 4NE
                                </div>
                            </div>
                        </div>
                        <div class="tm_shape_bg tm_accent_bg_10 tm_border tm_accent_border_20"></div>
                    </div>

                    <!-- Contract Information -->
                    <div class="tm_invoice_info tm_mb30 tm_align_center">
                        <div class="tm_invoice_info_left tm_mb20_md">
                            <p class="tm_mb0">
                                <b class="tm_primary_color">Contract #:</b> {{ $contract->id }}
                                <br>
                                <b class="tm_primary_color">Created On:</b>
                                {{ $contract->created_at ? $contract->created_at->format('d M Y') : 'N/A' }}
                                <br>
                                <b class="tm_primary_color">Effective From:</b>
                                {{ $contract->start_date ? $contract->start_date->format('d M Y') : 'N/A' }}
                                <br>
                                <b class="tm_primary_color">Until:</b>
                                {{ $contract->end_date ? $contract->end_date->format('d M Y') : 'N/A' }}
                            </p>
                        </div>
                        <div class="tm_invoice_info_right">
                            <!-- This block can display total milestone cost or anything else,
                                     or be left blank if you prefer -->
                            <div
                                class="tm_border tm_accent_border_20 tm_radius_0 tm_accent_bg_10 tm_curve_35 tm_text_center">
                                <div>
                                    <b class="tm_accent_color tm_f26 tm_medium tm_body_lineheight">
Where Innovation Meets Perfecton                                  </b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contract Title & Purpose -->
                    <h2 class="tm_f16 tm_section_heading tm_accent_border_20 tm_mb0">
                        <span
                            class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border tm_accent_border_20 tm_border_bottom_0 tm_accent_color">
                            <span style="color:#007aff !important;">{{ $contract->contract_title ?? 'Contract' }}</span>
                        </span>
                    </h2>
                    <p class="tm_mb30 tm_pt10" style="color:black !important;">
                        <strong>Purpose:</strong> {{ $contract->contract_purpose }}
                    </p>

                    <!-- Client Info -->
                    <h3 class="tm_f16 tm_mb5 tm_primary_color" style="color: #007aff; font-weight: bold; margin-bottom: 15px;">Client Information</h3>
<div class="tm_table tm_style1 tm_mb30" style="font-family: Arial, sans-serif;">
    <div class="tm_border tm_accent_border_20 tm_border_top_0" style="border-radius: 8px; border: 1px solid #007aff; padding: 15px; background-color: #f9f9f9;">
        <div class="tm_table_responsive">
            <table style="width: 100%; border-spacing: 0; border-collapse: collapse;">
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td style="width: 50%; padding: 8px; font-size: 14px; color: #333;">
                            <b style="color: #007aff;">Name:</b> {{ $contract->client_name }}
                        </td>
                        <td style="width: 50%; padding: 8px; font-size: 14px; color: #333; border-left: 1px solid #e0e0e0;">
                            <b style="color: #007aff;">Email:</b> {{ $contract->client_email }}
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td style="width: 50%; padding: 8px; font-size: 14px; color: #333;">
                            <b style="color: #007aff;">Phone:</b> {{ $contract->client_phone }}
                        </td>
                        <td style="width: 50%; padding: 8px; font-size: 14px; color: #333; border-left: 1px solid #e0e0e0;">
                            <b style="color: #007aff;">Address:</b> {{ $contract->client_address }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>















                    <!-- Milestones Table -->
                    @if (count($milestoneNames) > 0)
                    <h3 class="tm_f16 tm_mb5 tm_primary_color" style="color:#007aff; font-weight: bold; margin-bottom: 15px;">Milestones</h3>
                    <div class="tm_table tm_style1 tm_mb30" style="font-family: Arial, sans-serif;">
                        <div class="tm_border tm_accent_border_20" style="border: 1px solid #007aff; border-radius: 8px; padding: 15px; background-color: #f9f9f9;">
                            <div class="tm_table_responsive">
                                <table style="width: 100%; border-spacing: 0; border-collapse: collapse;">
                                    <thead>
                                        <tr style="background-color: #e6f2ff; text-align: left;">
                                            <th style="padding: 8px; font-size: 14px; font-weight: bold; color: #007aff;">#</th>
                                            <th style="padding: 8px; font-size: 14px; font-weight: bold; color: #007aff;">Name</th>
                                            <th style="padding: 8px; font-size: 14px; font-weight: bold; color: #007aff;">Description</th>
                                            <th style="padding: 8px; font-size: 14px; font-weight: bold; color: #007aff;">Due Date</th>
                                            <th style="padding: 8px; font-size: 14px; font-weight: bold; color: #007aff; text-align: right;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($milestoneNames as $index => $name)
                                            <tr style="background-color: {{ $index % 2 === 0 ? '#ffffff' : '#f9f9f9' }};">
                                                <td style="padding: 8px; font-size: 14px; color: #333;">{{ $index + 1 }}</td>
                                                <td style="padding: 8px; font-size: 14px; color: #333;">{{ $name }}</td>
                                                <td style="padding: 8px; font-size: 14px; color: #333;">{{ $milestoneDescs[$index] ?? '' }}</td>
                                                <td style="padding: 8px; font-size: 14px; color: #333;">
                                                    @if (!empty($milestoneDates[$index]))
                                                        {{ \Carbon\Carbon::parse($milestoneDates[$index])->format('d M Y') }}
                                                    @endif
                                                </td>
                                                <td style="padding: 8px; font-size: 14px; color: #333; text-align: right;">
                                                    ${{ number_format(floatval($milestoneAmounts[$index] ?? 0), 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" style="padding: 8px; text-align: right; font-size: 16px; font-weight: bold; color: #007aff;">
                                                Total Cost:
                                            </td>
                                            <td style="padding: 8px; font-size: 16px; font-weight: bold; color: #007aff; text-align: right;">
                                                ${{ number_format($totalAmount, 2) }}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                












                    <!-- Additional Contract Sections -->
                    <!-- Very Professional "Contract Details" Section -->
                    <div class="tm_box tm_accent_border_20 tm_radius_0 tm_mb30 tm_p20" style=" border-radius: 10px;">

                    

                    <h2 class="tm_f16 tm_section_heading tm_accent_border_20 tm_mb0">
                        <span
                            class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border tm_accent_border_20 tm_border_bottom_0 tm_accent_color">
                            <span style="color:#007aff !important;">Contract Details</span>
                        </span>
                    </h2>
                    
                        <!-- Loop through each section -->
                        @php
                            $sections = [
                                ['title' => 'Project Timeline', 'content' => $contract->project_timeline],
                                ['title' => 'Payment Terms', 'content' => $contract->payment_terms],
                                ['title' => 'Revisions', 'content' => $contract->revisions],
                                ['title' => 'Ownership & Intellectual Property', 'content' => $contract->ownership],
                                ['title' => 'Confidentiality', 'content' => $contract->confidentiality],
                                ['title' => 'Client Responsibilities', 'content' => $contract->client_responsibilities],
                                ['title' => 'Termination Clause', 'content' => $contract->termination_clause],
                                ['title' => 'Dispute Resolution', 'content' => $contract->dispute_resolution],
                                ['title' => 'Limitation of Liability', 'content' => $contract->limitation_liability],
                                ['title' => 'Amendments', 'content' => $contract->amendments],
                            ];
                        @endphp
                    
                        @foreach ($sections as $index => $section)
                            <!-- Individual Section -->
                            <div class="tm_contract_point tm_mb15 tm_pt15" style="padding: 15px; background-color: {{ $index % 2 === 0 ? '#ffffff' : '#f3f3f3' }}; border-radius: 5px; border: 1px solid #ddd; margin-bottom: 10px;">
                                <h4 class="tm_f16 tm_primary_color tm_bold" style="font-size: 16px; color: #007aff; display: flex; align-items: center; margin-bottom: 5px;">
                                    <span style="margin-right: 10px; font-size: 18px; color: #0056b3;">{{ $index + 1 }}.</span> {{ $section['title'] }}
                                </h4>
                                <div class="tm_gray_text tm_body_lineheight" style="font-size: 14px; color: #555;">
                                    {{ $section['content'] ?: 'N/A' }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    










                    @if (!empty($contract->signature))
                        <p class="tm_mb10">
                            <strong>Signature:</strong>
                            <img src="{{ asset('path/to/signature-images/' . $contract->signature) }}" alt="Signature"
                                style="max-width:150px; display:block; margin-top:5px;">
                        </p>
                    @endif

                    <!-- Bottom Section: Thank You / Terms -->
                    <div class="tm_bottom_invoice tm_accent_border_20" >
                        <!-- Centered Thank-You Message -->
                        <div class="tm_bottom_invoice_left tm_mb5" style="">
                            <p class="tm_m0 tm_f18 tm_accent_color tm_mb10" style="color:#007aff !important; font-size: 18px; font-weight: bold;">
                                Thank you for choosing our services!
                            </p>
                            <p class="tm_primary_color tm_f12 tm_bold" style="font-size: 14px; margin-bottom: 5px;">
                                Important Note
                            </p>
                            <p class="tm_m0 tm_f12" style="font-size: 12px; color: #555;">
                                This contract was generated electronically and is valid without signature or seal 
                                (unless specified otherwise in "Signature" above).
                            </p>
                        </div>
                    
                        <!-- Divider Line -->
                        <hr style="border-top: 1px solid #e0e0e0; margin: 20px 0;">
                    
                        <!-- Optional Logo Section -->
                        <div class="tm_text_center tm_logo" style="margin-top: 10px;">
                            <img src="{{ asset('public/assets/img/logo_accent.svg') }}" alt="Logo" style="max-width: 100px;">
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Buttons for Print / Download (mirroring invoice) -->
            <div class="tm_invoice_btns tm_hide_print">
                <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path
                                d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                                stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <circle cx="392" cy="184" r="24" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Print</span>
                </a>
                <!-- For PDF Download, you might integrate a library or your own route to handle PDF creation. -->
                <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69
                                0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256
                                224v224.03" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Download</span>
                </button>


                <a href="{{ route('admin.contract.edit', $contract->id ?? '') }}" class="tm_invoice_btn tm_color3">
                    <span class="tm_btn_icon">
                        <i class="material-icons-outlined">edit</i>
                    </span>
                    <span class="tm_btn_text">Edit</span>
                </a>
            </div>

      

        
        </div>
    </div>

    <!-- OPTIONAL: Add your script for handling the "Download" button,
             possibly generating a PDF with a library like domPDF or jsPDF. -->














    <script src="{{ asset('public/assets1/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets1/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('public/assets1/js/html2canvas.min.js') }}"></script>

    <script>
        (function($) {
            'use strict';

            $('#tm_download_btn').on('click', function() {
                // Show loader overlay
                $('#loader').show();

                // Grab the invoice DOM element
                const downloadSection = $('#tm_download_section')[0];

                // Scale factor for balanced quality and size
                const scaleFactor = 7; // Lower the scale to reduce image resolution and size

                // Start html2canvas
                html2canvas(downloadSection, {
                    scale: scaleFactor, // Use a lower scale for smaller output size
                    useCORS: true,
                    scrollX: 0,
                    scrollY: 0,
                }).then(function(canvas) {
                    // Convert canvas to a PNG data URL with optimized quality
                    const imgData = canvas.toDataURL('image/jpeg',
                    1); // Use JPEG for better compression (80% quality)

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

    {{-- <script src="{{ asset('public/assets1/js/main.js')}}"></script> --}}

@endsection
