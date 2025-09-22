<!DOCTYPE html>
<html>
<head>
    <title>Feature Usage Report</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f6f8fb; padding:30px; }
        .card { max-width:800px; margin:0 auto; background:white; padding:20px; border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,0.06); }
        h1 { margin-bottom:16px; }
        table { width:100%; border-collapse:collapse; }
        th, td { padding:8px 12px; border-bottom:1px solid #ddd; text-align:left; }
        th { background:#f3f4f6; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Feature Usage (Last 30 days)</h1>
        <table>
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Total Uses</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usageStats as $stat)
                    <tr>
                        <td>{{ $stat->feature_name }}</td>
                        <td>{{ $stat->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
