<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DpsController extends Controller
{
    public function mutasiKelurahanDpshpa($kodeKelurahan)
    {
        $query =  "SELECT 

            kecamatan.kecamatan AS kecamatan,
            kelurahan.kelurahan AS kelurahan,
            tps.tps,
            
            COALESCE(dps.l, 0) AS dps_l,
            COALESCE(dps.p, 0) AS dps_p,
            COALESCE(dps.lp, 0) AS dps_lp,
            
            COALESCE(k1.l, 0) AS l1,
            COALESCE(k1.p, 0) AS p1,
            COALESCE(k1.lp, 0) AS lp1,
            
            COALESCE(k2.l, 0) As l2,
            COALESCE(k2.p, 0) AS p2,
            COALESCE(k2.lp, 0) AS lp2,
            
            COALESCE(k3.l, 0) As l3,
            COALESCE(k3.p, 0) AS p3,
            COALESCE(k3.lp, 0) AS lp3,
            
            COALESCE(k4.l, 0) As l4,
            COALESCE(k4.p, 0) AS p4,
            COALESCE(k4.lp, 0) AS lp4,
            
            COALESCE(k5.l, 0) As l5,
            COALESCE(k5.p, 0) AS p5,
            COALESCE(k5.lp, 0) AS lp5,
            
            COALESCE(k6.l, 0) As l6,
            COALESCE(k6.p, 0) AS p6,
            COALESCE(k6.lp, 0) AS lp6,
            
            COALESCE(k7.l, 0) As l7,
            COALESCE(k7.p, 0) AS p7,
            COALESCE(k7.lp, 0) AS lp7,
            
            COALESCE(k8.l, 0) As l8,
            COALESCE(k8.p, 0) AS p8,
            COALESCE(k8.lp, 0) AS lp8,
            
            COALESCE(k9.l, 0) As l9,
            COALESCE(k9.p, 0) AS p9,
            COALESCE(k9.lp, 0) AS lp9,
            
            COALESCE(k10.l, 0) As l10,
            COALESCE(k10.p, 0) AS p10,
            COALESCE(k10.lp, 0) AS lp10,
            
            COALESCE(tms.l, 0) AS tms_l,
            COALESCE(tms.p, 0) AS tms_p,
            COALESCE(tms.lp, 0) As tms_lp,
            
            COALESCE(dptb.l, 0) As dptb_l,
            COALESCE(dptb.p, 0) AS dptb_p,
            COALESCE(dptb.lp, 0) AS dptb_lp,
            
            COALESCE(msyt.l, 0) As msyt_l,
            COALESCE(msyt.p, 0) AS msyt_p,
            COALESCE(msyt.lp, 0) AS msyt_lp,

            COALESCE(ubah.l, 0) As u_l,
            COALESCE(ubah.p, 0) As u_p,
            COALESCE(ubah.lp, 0) As u_lp,
            
            COALESCE(keluar.l, 0) As keluar_l,
            COALESCE(keluar.p, 0) AS keluar_p,
            COALESCE(keluar.lp, 0) AS keluar_lp,
            
            COALESCE(masuk.l, 0) As masuk_l,
            COALESCE(masuk.p, 0) AS masuk_p,
            COALESCE(masuk.lp, 0) AS masuk_lp,
            
            COALESCE(dpshp.l, 0) As dpshp_l,
            COALESCE(dpshp.p, 0) AS dpshp_p,
            COALESCE(dpshp.lp, 0) AS dpshp_lp
            
            FROM
            (
                SELECT kode_kelurahan, lpad(tps,3,'0') as tps
                FROM v_dpshpa_name dpshp
                GROUP BY kode_kelurahan, lpad(tps,3,'0')
            ) tps 
            
            left join v_dpshp dps ON dps.kode_kelurahan = tps.kode_kelurahan AND dps.tps = tps.tps
            left join v_dpshpa dpshp ON dpshp.kode_kelurahan = tps.kode_kelurahan AND dpshp.tps = tps.tps
            left join v_dpshpa_kode1 k1 ON k1.kode_kelurahan = tps.kode_kelurahan AND k1.tps = tps.tps
            left join v_dpshpa_kode2 k2 ON k2.kode_kelurahan = tps.kode_kelurahan AND k2.tps = tps.tps
            left join v_dpshpa_kode3 k3 ON k3.kode_kelurahan = tps.kode_kelurahan AND k3.tps = tps.tps
            left join v_dpshpa_kode4 k4 ON k4.kode_kelurahan = tps.kode_kelurahan AND k4.tps = tps.tps
            left join v_dpshpa_kode5 k5 ON k5.kode_kelurahan = tps.kode_kelurahan AND k5.tps = tps.tps
            left join v_dpshpa_kode6 k6 ON k6.kode_kelurahan = tps.kode_kelurahan AND k6.tps = tps.tps
            left join v_dpshpa_kode7 k7 ON k7.kode_kelurahan = tps.kode_kelurahan AND k7.tps = tps.tps
            left join v_dpshpa_kode8 k8 ON k8.kode_kelurahan = tps.kode_kelurahan AND k8.tps = tps.tps
            left join v_dpshpa_kode9 k9 ON k9.kode_kelurahan = tps.kode_kelurahan AND k9.tps = tps.tps
            left join v_dpshpa_kode10 k10 ON k10.kode_kelurahan = tps.kode_kelurahan AND k10.tps = tps.tps
            left join v_dpshpa_tms tms ON tms.kode_kelurahan = tps.kode_kelurahan AND tms.tps = tps.tps
            left join v_dpshpa_kode11 k11 ON k11.kode_kelurahan = tps.kode_kelurahan AND k11.tps = tps.tps
            left join v_dpshpa_kode12 k12 ON k12.kode_kelurahan = tps.kode_kelurahan AND k12.tps = tps.tps
            left join v_dpshpa_dptb dptb ON dptb.kode_kelurahan = tps.kode_kelurahan AND dptb.tps = tps.tps
            left join v_dpshpa_masyarakat msyt ON msyt.kode_kelurahan = tps.kode_kelurahan AND msyt.tps = tps.tps
            left join v_dpshpa_ubah ubah ON ubah.kode_kelurahan = tps.kode_kelurahan AND ubah.tps = tps.tps
            left join v_dpshpa_pindah_masuk masuk ON masuk.kode_kelurahan = tps.kode_kelurahan AND masuk.tps = tps.tps
            left join v_dpshpa_pindah_keluar keluar ON keluar.kode_kelurahan = tps.kode_kelurahan AND keluar.tps = tps.tps
            JOIN kelurahan ON kelurahan.kode_kelurahan = tps.kode_kelurahan
            JOIN kecamatan ON kecamatan.kode_kecamatan = kelurahan.kode_kecamatan
            WHERE tps.kode_kelurahan = '$kodeKelurahan'
            ORDER BY tps.kode_kelurahan";
        
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps]);
    }

    public function mutasiKelurahanDpshp($kodeKelurahan)
    {
        $query =  "SELECT 

            kecamatan.kecamatan AS kecamatan,
            kelurahan.kelurahan AS kelurahan,
            tps.tps,
            
            COALESCE(dps.l, 0) AS dps_l,
            COALESCE(dps.p, 0) AS dps_p,
            COALESCE(dps.lp, 0) AS dps_lp,
            
            COALESCE(k1.l, 0) AS l1,
            COALESCE(k1.p, 0) AS p1,
            COALESCE(k1.lp, 0) AS lp1,
            
            COALESCE(k2.l, 0) As l2,
            COALESCE(k2.p, 0) AS p2,
            COALESCE(k2.lp, 0) AS lp2,
            
            COALESCE(k3.l, 0) As l3,
            COALESCE(k3.p, 0) AS p3,
            COALESCE(k3.lp, 0) AS lp3,
            
            COALESCE(k4.l, 0) As l4,
            COALESCE(k4.p, 0) AS p4,
            COALESCE(k4.lp, 0) AS lp4,
            
            COALESCE(k5.l, 0) As l5,
            COALESCE(k5.p, 0) AS p5,
            COALESCE(k5.lp, 0) AS lp5,
            
            COALESCE(k6.l, 0) As l6,
            COALESCE(k6.p, 0) AS p6,
            COALESCE(k6.lp, 0) AS lp6,
            
            COALESCE(k7.l, 0) As l7,
            COALESCE(k7.p, 0) AS p7,
            COALESCE(k7.lp, 0) AS lp7,
            
            COALESCE(k8.l, 0) As l8,
            COALESCE(k8.p, 0) AS p8,
            COALESCE(k8.lp, 0) AS lp8,
            
            COALESCE(k9.l, 0) As l9,
            COALESCE(k9.p, 0) AS p9,
            COALESCE(k9.lp, 0) AS lp9,
            
            COALESCE(k10.l, 0) As l10,
            COALESCE(k10.p, 0) AS p10,
            COALESCE(k10.lp, 0) AS lp10,
            
            COALESCE(tms.l, 0) AS tms_l,
            COALESCE(tms.p, 0) AS tms_p,
            COALESCE(tms.lp, 0) As tms_lp,
            
            COALESCE(dptb.l, 0) As dptb_l,
            COALESCE(dptb.p, 0) AS dptb_p,
            COALESCE(dptb.lp, 0) AS dptb_lp,
            
            COALESCE(msyt.l, 0) As msyt_l,
            COALESCE(msyt.p, 0) AS msyt_p,
            COALESCE(msyt.lp, 0) AS msyt_lp,

            COALESCE(ubah.l, 0) As u_l,
            COALESCE(ubah.p, 0) As u_p,
            COALESCE(ubah.lp, 0) As u_lp,
            
            COALESCE(keluar.l, 0) As keluar_l,
            COALESCE(keluar.p, 0) AS keluar_p,
            COALESCE(keluar.lp, 0) AS keluar_lp,
            
            COALESCE(masuk.l, 0) As masuk_l,
            COALESCE(masuk.p, 0) AS masuk_p,
            COALESCE(masuk.lp, 0) AS masuk_lp,
            
            COALESCE(dpshp.l, 0) As dpshp_l,
            COALESCE(dpshp.p, 0) AS dpshp_p,
            COALESCE(dpshp.lp, 0) AS dpshp_lp
            
            FROM
            (
                SELECT kode_kelurahan, tps
                FROM dpshp
                GROUP BY kode_kelurahan, tps
            ) tps 
            
            left join v_dps dps ON dps.kode_kelurahan = tps.kode_kelurahan AND dps.tps = tps.tps
            left join v_dpshp dpshp ON dpshp.kode_kelurahan = tps.kode_kelurahan AND dpshp.tps = tps.tps
            left join v_dpshp_kode1 k1 ON k1.kode_kelurahan = tps.kode_kelurahan AND k1.tps = tps.tps
            left join v_dpshp_kode2 k2 ON k2.kode_kelurahan = tps.kode_kelurahan AND k2.tps = tps.tps
            left join v_dpshp_kode3 k3 ON k3.kode_kelurahan = tps.kode_kelurahan AND k3.tps = tps.tps
            left join v_dpshp_kode4 k4 ON k4.kode_kelurahan = tps.kode_kelurahan AND k4.tps = tps.tps
            left join v_dpshp_kode5 k5 ON k5.kode_kelurahan = tps.kode_kelurahan AND k5.tps = tps.tps
            left join v_dpshp_kode6 k6 ON k6.kode_kelurahan = tps.kode_kelurahan AND k6.tps = tps.tps
            left join v_dpshp_kode7 k7 ON k7.kode_kelurahan = tps.kode_kelurahan AND k7.tps = tps.tps
            left join v_dpshp_kode8 k8 ON k8.kode_kelurahan = tps.kode_kelurahan AND k8.tps = tps.tps
            left join v_dpshp_kode9 k9 ON k9.kode_kelurahan = tps.kode_kelurahan AND k9.tps = tps.tps
            left join v_dpshp_kode10 k10 ON k10.kode_kelurahan = tps.kode_kelurahan AND k10.tps = tps.tps
            left join v_dpshp_tms tms ON tms.kode_kelurahan = tps.kode_kelurahan AND tms.tps = tps.tps
            left join v_dpshp_kode11 k11 ON k11.kode_kelurahan = tps.kode_kelurahan AND k11.tps = tps.tps
            left join v_dpshp_kode12 k12 ON k12.kode_kelurahan = tps.kode_kelurahan AND k12.tps = tps.tps
            left join v_dpshp_dptb dptb ON dptb.kode_kelurahan = tps.kode_kelurahan AND dptb.tps = tps.tps
            left join v_dpshp_masyarakat msyt ON msyt.kode_kelurahan = tps.kode_kelurahan AND msyt.tps = tps.tps
            left join v_dpshp_ubah ubah ON ubah.kode_kelurahan = tps.kode_kelurahan AND ubah.tps = tps.tps
            left join v_dpshp_pindah_masuk masuk ON masuk.kode_kelurahan = tps.kode_kelurahan AND masuk.tps = tps.tps
            left join v_dpshp_pindah_keluar keluar ON keluar.kode_kelurahan = tps.kode_kelurahan AND keluar.tps = tps.tps
            JOIN kelurahan ON kelurahan.kode_kelurahan = tps.kode_kelurahan
            JOIN kecamatan ON kecamatan.kode_kecamatan = kelurahan.kode_kecamatan
            WHERE tps.kode_kelurahan = '$kodeKelurahan'
            ORDER by tps.kode_kelurahan";
        
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps]);
    }

    public function mutasiKecamatanDpshpa($kodeKecamatan)
    {
        $query =  "SELECT 
        kecamatan.kecamatan AS kecamatan,
        kelurahan.kelurahan AS kelurahan,
                    
        COALESCE(dps.lk, 0) AS dps_l,
        COALESCE(dps.pr, 0) AS dps_p,
        COALESCE(dps.lkpr, 0) AS dps_lp,

        COALESCE(tps.jumlah, 0) AS tps,
                
        COALESCE(k1.lk, 0) AS l1,
        COALESCE(k1.pr, 0) AS p1,
        COALESCE(k1.lkpr, 0) AS lp1,
        
        COALESCE(k2.lk, 0) As l2,
        COALESCE(k2.pr, 0) AS p2,
        COALESCE(k2.lkpr, 0) AS lp2,
                    
        COALESCE(k3.lk, 0) As l3,
        COALESCE(k3.pr, 0) AS p3,
        COALESCE(k3.lkpr, 0) AS lp3,
                    
        COALESCE(k4.lk, 0) As l4,
        COALESCE(k4.pr, 0) AS p4,
        COALESCE(k4.lkpr, 0) AS lp4,
                    
        COALESCE(k5.lk, 0) As l5,
        COALESCE(k5.pr, 0) AS p5,
        COALESCE(k5.lkpr, 0) AS lp5,
                    
        COALESCE(k6.lk, 0) As l6,
        COALESCE(k6.pr, 0) AS p6,
        COALESCE(k6.lkpr, 0) AS lp6,
                    
        COALESCE(k7.lk, 0) As l7,
        COALESCE(k7.pr, 0) AS p7,
        COALESCE(k7.lkpr, 0) AS lp7,
        
        COALESCE(k8.lk, 0) As l8,
        COALESCE(k8.pr, 0) AS p8,
        COALESCE(k8.lkpr, 0) AS lp8,
                    
        COALESCE(k9.lk, 0) As l9,
        COALESCE(k9.pr, 0) AS p9,
        COALESCE(k9.lkpr, 0) AS lp9,
                    
        COALESCE(k10.lk, 0) As l10,
        COALESCE(k10.pr, 0) AS p10,
        COALESCE(k10.lkpr, 0) AS lp10,
                    
        COALESCE(tms.lk, 0) AS tms_l,
        COALESCE(tms.pr, 0) AS tms_p,
        COALESCE(tms.lkpr, 0) As tms_lp,
                    
        COALESCE(dptb.lk, 0) As dptb_l,
        COALESCE(dptb.pr, 0) AS dptb_p,
        COALESCE(dptb.lkpr, 0) AS dptb_lp,

        COALESCE(pindah.lk, 0) As pindah_l,
        COALESCE(pindah.pr, 0) AS pindah_p,
        COALESCE(pindah.lkpr, 0) AS pindah_lp,

        COALESCE(msyt.lk, 0) As msyt_l,
        COALESCE(msyt.pr, 0) AS msyt_p,
        COALESCE(msyt.lkpr, 0) AS msyt_lp,
        
        COALESCE(ubah.lk, 0) As u_l,
        COALESCE(ubah.pr, 0) As u_p,
        COALESCE(ubah.lkpr, 0) As u_lp,
                               
        COALESCE(dpshp.lk, 0) As dpshp_l,
        COALESCE(dpshp.pr, 0) AS dpshp_p,
        COALESCE(dpshp.lkpr, 0) AS dpshp_lp
                    
        FROM kelurahan
                    
        left join v_kec_dpshp dps ON dps.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa dpshp ON dpshp.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode1 k1 ON k1.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode2 k2 ON k2.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode3 k3 ON k3.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode4 k4 ON k4.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode5 k5 ON k5.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode6 k6 ON k6.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode7 k7 ON k7.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode8 k8 ON k8.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode9 k9 ON k9.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode10 k10 ON k10.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_tms tms ON tms.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode11 k11 ON k11.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_kode12 k12 ON k12.kode_kelurahan = kelurahan.kode_kelurahan
        -- left join v_kec_dpshpa_dptb_non_sidalih dptb ON dptb.kode_kelurahan = kelurahan.kode_kelurahan
        -- left join v_kec_dpshpa_masyarakat_non_sidalih msyt ON msyt.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_dptb dptb ON dptb.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_masyarakat msyt ON msyt.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshpa_ubah ubah ON ubah.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN v_kec_dpshpa_pindah pindah ON pindah.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN v_kec_dpshpa_tps tps ON tps.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN kecamatan ON kecamatan.kode_kecamatan = kelurahan.kode_kecamatan
        WHERE kelurahan.kode_kecamatan = '$kodeKecamatan'
        ORDER BY kelurahan.kode_kelurahan";
        
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps]);
    }

    public function mutasiKecamatanDpshp($kodeKecamatan)
    {
        $query =  "SELECT 
        kecamatan.kecamatan AS kecamatan,
        kelurahan.kelurahan AS kelurahan,
                    
        COALESCE(dps.lk, 0) AS dps_l,
        COALESCE(dps.pr, 0) AS dps_p,
        COALESCE(dps.lkpr, 0) AS dps_lp,

        COALESCE(tps.jumlah, 0) AS tps,
                
        COALESCE(k1.lk, 0) AS l1,
        COALESCE(k1.pr, 0) AS p1,
        COALESCE(k1.lkpr, 0) AS lp1,
        
        COALESCE(k2.lk, 0) As l2,
        COALESCE(k2.pr, 0) AS p2,
        COALESCE(k2.lkpr, 0) AS lp2,
                    
        COALESCE(k3.lk, 0) As l3,
        COALESCE(k3.pr, 0) AS p3,
        COALESCE(k3.lkpr, 0) AS lp3,
                    
        COALESCE(k4.lk, 0) As l4,
        COALESCE(k4.pr, 0) AS p4,
        COALESCE(k4.lkpr, 0) AS lp4,
                    
        COALESCE(k5.lk, 0) As l5,
        COALESCE(k5.pr, 0) AS p5,
        COALESCE(k5.lkpr, 0) AS lp5,
                    
        COALESCE(k6.lk, 0) As l6,
        COALESCE(k6.pr, 0) AS p6,
        COALESCE(k6.lkpr, 0) AS lp6,
                    
        COALESCE(k7.lk, 0) As l7,
        COALESCE(k7.pr, 0) AS p7,
        COALESCE(k7.lkpr, 0) AS lp7,
        
        COALESCE(k8.lk, 0) As l8,
        COALESCE(k8.pr, 0) AS p8,
        COALESCE(k8.lkpr, 0) AS lp8,
                    
        COALESCE(k9.lk, 0) As l9,
        COALESCE(k9.pr, 0) AS p9,
        COALESCE(k9.lkpr, 0) AS lp9,
                    
        COALESCE(k10.lk, 0) As l10,
        COALESCE(k10.pr, 0) AS p10,
        COALESCE(k10.lkpr, 0) AS lp10,
                    
        COALESCE(tms.lk, 0) AS tms_l,
        COALESCE(tms.pr, 0) AS tms_p,
        COALESCE(tms.lkpr, 0) As tms_lp,
                    
        COALESCE(dptb.lk, 0) As dptb_l,
        COALESCE(dptb.pr, 0) AS dptb_p,
        COALESCE(dptb.lkpr, 0) AS dptb_lp,

        COALESCE(pindah.lk, 0) As pindah_l,
        COALESCE(pindah.pr, 0) AS pindah_p,
        COALESCE(pindah.lkpr, 0) AS pindah_lp,

        COALESCE(msyt.lk, 0) As msyt_l,
        COALESCE(msyt.pr, 0) AS msyt_p,
        COALESCE(msyt.lkpr, 0) AS msyt_lp,
        
        COALESCE(ubah.lk, 0) As u_l,
        COALESCE(ubah.pr, 0) As u_p,
        COALESCE(ubah.lkpr, 0) As u_lp,
                               
        COALESCE(dpshp.lk, 0) As dpshp_l,
        COALESCE(dpshp.pr, 0) AS dpshp_p,
        COALESCE(dpshp.lkpr, 0) AS dpshp_lp
                    
        FROM kelurahan
                    
        left join v_kec_dps dps ON dps.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp dpshp ON dpshp.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode1 k1 ON k1.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode2 k2 ON k2.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode3 k3 ON k3.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode4 k4 ON k4.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode5 k5 ON k5.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode6 k6 ON k6.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode7 k7 ON k7.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode8 k8 ON k8.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode9 k9 ON k9.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_kode10 k10 ON k10.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_tms tms ON tms.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_dptb dptb ON dptb.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_masyarakat msyt ON msyt.kode_kelurahan = kelurahan.kode_kelurahan
        left join v_kec_dpshp_ubah ubah ON ubah.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN v_kec_dpshp_pindah pindah ON pindah.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN v_kec_dpshp_tps tps ON tps.kode_kelurahan = kelurahan.kode_kelurahan
        JOIN kecamatan ON kecamatan.kode_kecamatan = kelurahan.kode_kecamatan
        WHERE kelurahan.kode_kecamatan = '$kodeKecamatan'
        ORDER BY kelurahan.kode_kelurahan";
        
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps]);
    }

    public function byNameDps($kodeKelurahan, $tps)
    {
        $query = "SELECT * 
            FROM dpshpa 
            WHERE kode_kelurahan = '$kodeKelurahan' 
            AND tps = '$tps'";

        $dps = \DB::select($query);
        return response()->json(['dps' => $dps]);
    }

    public function adminRole($kodeKelurahan) 
    {
        $query = "SELECT kelurahan.kelurahan AS kelurahan,
            kecamatan.kecamatan AS kecamatan
            FROM kelurahan
            JOIN kecamatan ON kecamatan.kode_kecamatan = LEFT(kelurahan.kode_kelurahan, 6) 
            WHERE kelurahan.kode_kelurahan = '$kodeKelurahan'";

        $administrasi = collect(\DB::select($query))->first();
        
        return response()->json(['administrasi' => $administrasi]);

    }

    public function viewTps1($kodeKelurahan) 
    {
        $query = "SELECT kode_kelurahan, tps
            FROM dpshp
            WHERE kode_kelurahan = '$kodeKelurahan'
            AND tps IN 
            ('001','002','003','004','005','006','007','008','009','010',
            '011','012','013','014','015','016','017','018','019','020',
            '021','022','023','024','025','026','027','028','029','030')
            GROUP BY kode_kelurahan, tps
            ORDER BY kode_kelurahan, tps";

        $dps = \DB::select($query);
        return response()->json(['dps' => $dps]);
    }

    public function viewTps2($kodeKelurahan) 
    {
        $query = "SELECT kode_kelurahan, tps
            FROM dpshp
            WHERE kode_kelurahan = '$kodeKelurahan'
            AND tps IN 
            ('031','032','033','034','035','036','037','038','039','040',
            '041','042','043','044','045','046','047','048','049','050',
            '051','052','053','054','055','056','057','058','059','060')
            GROUP BY kode_kelurahan, tps
            ORDER BY kode_kelurahan, tps";

        $dps = \DB::select($query);
        return response()->json(['dps' => $dps]);
    }

    public function viewTps3($kodeKelurahan) 
    {
        $query = "SELECT kode_kelurahan, tps
            FROM dpshp
            WHERE kode_kelurahan = '$kodeKelurahan'
            AND tps IN 
            ('061','062','063','064','065','066','067','068','069','070',
            '071','072','073','074','075','076','077','078','079','080',
            '081','082','083','084','085','086','087','088','089','090')
            GROUP BY kode_kelurahan, tps
            ORDER BY kode_kelurahan, tps";

        $dps = \DB::select($query);
        return response()->json(['dps' => $dps]);
    }

    public function byNameDpsBintang($kodeKelurahan, $tps)
    {
        $query = "SELECT *, 
            CONCAT(LEFT(nkk, 10),'******') AS nkk_bintang, 
            CONCAT(LEFT(nik, 10),'******') AS nik_bintang
            -- nkk AS nkk_bintang, 
            -- nik AS nik_bintang
            FROM dpshp
            WHERE kode_kelurahan = '$kodeKelurahan' 
            AND tps = '$tps'
            AND keterangan NOT IN (1,2,3,4,5,6,7,8,9,10,13)";
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps, 'tps' => $tps]);
    }

    public function byNameDpsNonBintang($kodeKelurahan, $tps)
    {
        $query = "SELECT *, 
            nkk AS nkk_bintang, 
            nik AS nik_bintang
            FROM dpshp
            WHERE kode_kelurahan = '$kodeKelurahan' 
            AND tps = '$tps'
            AND keterangan NOT IN (1,2,3,4,5,6,7,8,9,10,13)";
        $dps = \DB::select($query);

        return response()->json(['dps' => $dps, 'tps' => $tps]);
    }

    public function kelurahan($kodeKecamatan)
    {
        $query = "SELECT * FROM kelurahan 
            WHERE kode_kecamatan = '$kodeKecamatan'
            ORDER BY kode_kelurahan";

        $kelurahan = \DB::select($query);
        return response()->json(['kelurahan' => $kelurahan]);
    }

    public function detailKelurahan($kodeKelurahan)
    {
        $query = "SELECT kelurahan.*, kecamatan.kecamatan FROM kelurahan
            JOIN kecamatan ON kelurahan.kode_kecamatan = kecamatan.kode_kecamatan
            WHERE kode_kelurahan = '$kodeKelurahan'";

        $kelurahan = \DB::select($query);
        return response()->json(['kelurahan' => $kelurahan]);
    }

    public function detailKecamatan($kodeKecamatan)
    {
        $query = "SELECT * FROM kecamatan
            WHERE kode_kecamatan = '$kodeKecamatan'";

        $kecamatan = collect(\DB::select($query))->first();
        return response()->json(['kecamatan' => $kecamatan]);
    }
}
