<?php
class Cevap {
  
  public $cevap_metni;
  public $cevap_veren_kullanici;
  public $cevap_tarihi;
  public $begenme_sayisi;
  public $begenmeme_sayisi;

  
  function __construct($cevap_metni,$cevap_veren_kullanici, $cevap_tarihi, $begenme_sayisi,$degenmeme_sayisi) {
    $this->cevap_metni = $cevap_metni;
    $this->cevap_veren_kullanici = $cevap_veren_kullanici;
    $this->cevap_tarihi = $cevap_tarihi;
    $this->begenme_sayisi = $begenme_sayisi;
    $this->degenmeme_sayisi = $degenmeme_sayisi;
  }
}
?>