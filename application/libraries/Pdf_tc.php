<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf_tc extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }

    public function Header() {
    	$html .= '<table style="width:100%"><thead></thead><tr>';
        $html .= '<td><img width="80px"  src="'. base_url() . 'static/images/logo.png" alt="Logo"></td>';
        $html .= '<td><img width="250px"  src="' . base_url() . 'static/images/pdf_imgs/header.jpg" alt="Logo2"></td>';
	    $html .= '</tr></table>';
        $this->writeHTML($html, true, false, false, false, '');
    }

    public function Footer()
    {
    	$this->SetFont('aefurat', '', 18);
    	$html = '<table style="font-size:10px;padding:5px;margin-bottom:50%;text-align: center;border: 1px solid black;border-collapse: collapse;">
            <tr>
                <td style="border: 1px solid black;border-collapse: collapse;background-color:orange;">EPIC Address</td>
                <td colspan="3" style="border: 1px solid black;border-collapse: collapse;">دول الجو بأضرار الأثنان مع, قبل هو دخول المضي الأهداف<br>Salah uddin Ayubi Road, Malaz, Riyadh, Kingdom of Saudi Arabia.</td>
            </tr>
        </table>';

        $this->writeHTML($html, true, false, false, false, '');
    }
}
