<?php 

    $logo = (file_exists(base_url("assets/img/".identitas('logo'))))? "assets/img/".$gambar : "assets/img/no_image.png"; 
            $data = $this->Laporan_surat_Model->cari_laporan($jen,$dari,$sampai); 

            $pdf = new FPDF('l','mm','A5');
            $pdf->AddPage();
            $pdf->Image($logo, 85,8,30);
            $pdf->Cell(190,7,'',0,1,'C');
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(190,7,strip_tags(strtoupper(identitas('nama_instansi'))),0,1,'C');
            $pdf->SetFont('Arial','B',9);
            $pdf->Cell(190,7,strip_tags(strtoupper(identitas('alamat_lengkap'))),0,1,'C');
            $pdf->SetFont('Arial','B',8);
            $pdf->Cell(190,7,'Tepl : '.strip_tags(strtoupper(identitas('telp'))).', Fax : '.strip_tags(strtoupper(identitas('fax'))),0,1,'C');
            
            $pdf->Line(20, 30, 190, 30);
            $pdf->SetFont('Arial','i',9);
            $pdf->Cell(190,7,'Laporan Rekap Data Laporan Arsip '.ucfirst($jen).' Tanggal :'.tgl_indonesia($dari).' S/d '.tgl_indonesia($sampai),0,1,'C');

            $pdf->Cell(10,7,'',0,1);
