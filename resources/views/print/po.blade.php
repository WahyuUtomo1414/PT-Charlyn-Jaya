<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purchase Order - {{ $po->no_po }}</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 12px;
            color: #333;
            margin: 0;
            line-height: 1.5;
        }

        .header {
            width: 100%;
            border-bottom: 2px solid #444;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .header table {
            width: 100%;
            border-collapse: collapse;
        }

        .logo {
            max-height: 70px;
        }

        .company-name {
            font-size: 20px;
            font-weight: bold;
            color: #1a56db;
            text-transform: uppercase;
        }

        .company-info {
            font-size: 11px;
            color: #666;
            margin-top: 5px;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 25px;
            color: #111;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .info-section {
            width: 100%;
            margin-bottom: 20px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 4px 0;
            vertical-align: top;
        }

        .label {
            width: 140px;
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #111;
        }

        .content-section {
            margin-top: 15px;
            padding: 15px;
            background-color: #f9fafb;
            border: 1px solid #f3f4f6;
            border-radius: 8px;
        }

        .section-title {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 8px;
            color: #111;
            display: block;
            font-size: 13px;
        }

        .signature-section {
            margin-top: 50px;
            width: 100%;
        }

        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }

        .signature-table td {
            width: 50%;
            text-align: center;
            vertical-align: bottom;
        }

        .signature-space {
            height: 70px;
        }

        .signature-name {
            font-weight: bold;
            text-decoration: underline;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 10px;
            color: #999;
            text-align: right;
            border-top: 1px solid #eee;
            padding-top: 5px;
        }
        
        .divider {
            border-top: 1px dashed #ccc;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <table>
            <tr>
                <td style="width: 70%;">
                    <div class="company-name">{{ $perusahaan->nama ?? 'PT. CHARLYN JAYA' }}</div>
                    <div class="company-info">
                        {{ $perusahaan->alamat ?? '-' }}<br>
                        Email: {{ $perusahaan->email ?? '-' }} | Telp/WA: {{ $perusahaan->no_wa ?? '-' }}
                    </div>
                </td>
                <td style="width: 30%; text-align: right;">
                    @php
                        $logoPath = public_path('assets/logo.png');
                        if (file_exists($logoPath)) {
                            $type = pathinfo($logoPath, PATHINFO_EXTENSION);
                            $data = file_get_contents($logoPath);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                        } else {
                            $base64 = '';
                        }
                    @endphp
                    @if ($base64)
                        <img src="{{ $base64 }}" class="logo" alt="Logo">
                    @endif
                </td>
            </tr>
        </table>
    </div>

    <div class="title">Purchase Order</div>

    <div class="info-section">
        <table class="info-table">
            <tr>
                <td class="label">Nomor PO</td>
                <td style="width: 10px;">:</td>
                <td class="value"><strong>{{ $po->no_po }}</strong></td>
                <td class="label">Tanggal PO</td>
                <td style="width: 10px;">:</td>
                <td class="value">{{ $po->created_at->format('d F Y') }}</td>
            </tr>
            <tr>
                <td class="label">Perusahaan</td>
                <td>:</td>
                <td class="value">{{ $po->penawaran?->nama_perusahaan ?? '-' }}</td>
                <td class="label">Status</td>
                <td>:</td>
                <td class="value" style="color: green; font-weight: bold;">{{ strtoupper($po->status) }}</td>
            </tr>
        </table>
        
        <div class="divider"></div>
        
        <table class="info-table">
            <tr>
                <td class="label">Layanan</td>
                <td style="width: 10px;">:</td>
                <td class="value" colspan="4"><strong>{{ $po->penawaran?->layanan?->nama ?? '-' }}</strong></td>
            </tr>
            <tr>
                <td class="label">Tgl. Permintaan</td>
                <td>:</td>
                <td class="value">
                    {{ $po->penawaran?->tanggal_permintaan ? \Carbon\Carbon::parse($po->penawaran->tanggal_permintaan)->format('d F Y') : '-' }}
                </td>
                <td class="label">Quantity</td>
                <td>:</td>
                <td class="value">{{ $po->penawaran?->quantity ?? '0' }} Orang</td>
            </tr>
            <tr>
                <td class="label">Deadline</td>
                <td>:</td>
                <td class="value" colspan="4">
                    {{ $po->penawaran?->deadline_pengerjaan ? \Carbon\Carbon::parse($po->penawaran->deadline_pengerjaan)->format('d F Y') : '-' }}
                </td>
            </tr>
        </table>
    </div>

    <div class="content-section">
        <span class="section-title">Deskripsi Pekerjaan:</span>
        <div style="margin-bottom: 15px;">
            {!! nl2br(e($po->penawaran?->deskripsi ?? '-')) !!}
        </div>

        <span class="section-title">Catatan PO / Instruksi Khusus:</span>
        <div>
            {!! nl2br(e($po->catatan ?? '-')) !!}
        </div>
    </div>

    <div class="signature-section">
        <table class="signature-table">
            <tr>
                <td>
                    Customer,<br><br>
                    <div class="signature-space"></div>
                    <div class="signature-name">( {{ $po->createdBy->name ?? '..........................' }} )</div>
                    <span>{{ $po->penawaran?->nama_perusahaan ?? 'Pihak Pemesan' }}</span>
                </td>
                <td>
                    Hormat Kami,<br>
                    <strong>{{ $perusahaan->nama ?? 'PT. CHARLYN JAYA' }}</strong>
                    <div class="signature-space"></div>
                    <div class="signature-name">( ........................................ )</div>
                    <span>Direktur / Management</span>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Dokumen ini dibuat secara digital dan sah tanpa tanda tangan basah jika diverifikasi melalui sistem.<br>
        Dicetak pada: {{ now()->format('d/m/Y H:i') }}
    </div>
</body>

</html>
