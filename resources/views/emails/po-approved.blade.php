<x-mail::message>
# Purchase Order Approved

Halo {{ $po->createdBy->name }},

Purchase Order anda dengan nomor **{{ $po->no_po }}** telah di-**Approve**.

**Detail PO:**
- Nomor PO: {{ $po->no_po }}
- Perusahaan: {{ $po->penawaran?->nama_perusahaan }}
- Status: Approved

<x-mail::button :url="config('app.url')">
Lihat Detail
</x-mail::button>

Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>
