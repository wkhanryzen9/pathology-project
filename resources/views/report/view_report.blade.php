
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathology Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .report-container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0;
            font-size: 14px;
            color: #666;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .details-table, .results-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .details-table th, .details-table td, 
        .results-table th, .results-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .details-table th {
            background: #f8f8f8;
        }
        .results-table th {
            background: #f0f0f8;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="report-container">
        <!-- Header Section -->
        <div class="header">
            <h1>Pathology Laboratory</h1>
            <p></p>
            <p></p>
        </div>

        <!-- Patient Details Section -->
        <div class="section">
            <h2>Patient Details</h2>
            <table class="details-table">
                <tr>
                    <th>Patient Name</th>
                    <td>{{$report->patient_name}}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{$report->patient_age}}</td>
                </tr>
                <tr>
                    <th>Referred By</th>
                    <td>{{$report->ref_by_doctor}}</td>
                </tr>
                <tr>
                    </tr>
            </table>
        </div>

        <!-- Test Details Section -->
        <div class="section">
            <h2>Test Details</h2>
            <table class="details-table">
                <tr>
                    <th>Category</th>
                    <td>{{$report->category->name}}</td>
                </tr>
                <tr>
                    <th>Sub-Category</th>
                    <td>{{$report->subcategory->name}}</td>
                </tr>
                <tr>
                    <th>Test Name</th>
                    <td>{{$report->test->name}}</td>
                </tr>
            </table>
        </div>

        <!-- Test Results Section -->
        <div class="section">
            <h2>Test Results</h2>
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Result</th>
                        <th>Normal Range</th>
                        <th>Units</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$report->test->name}}</td>
                        @if ($report->result < $report->test->lower_value && $report->result <= $report->test->upper_value)
                        
                        <td style="color: red;">{{$report->result}} Low</td>

                        @elseif ($report->result > $report->test->upper_value)
                        
                        <td style="color: red;">{{$report->result}} High</td>

                        @else

                        <td style="font-weight: 800;">{{$report->result}}</td>

                        @endif
                        <td>{{$report->test->lower_value}} - {{$report->test->upper_value}}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>Thank you for choosing Pathology Laboratory. For inquiries, contact us at info@pathlab.com</p>
        </div>
    </div>
</body>
</html>