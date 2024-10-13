<?php 

  declare(strict_types=1);

  class NextMovie
  {
    public function __construct(
      private int $day_until,
       private string $title,
       private string $following_productions,
       private string $release_date,
       private string $poster_url,
       private string $overview_url,
      ){}

  public function get_until_message(): string
 {
  $days = $this->day_until;
  return match(true) {
    $days === 0 => "Hoy se estrena",
    $days === 1 => "mañana se estrena",
    $days < 7   => "se estrena esta semana",
    $days < 30  => "se estrena este mes",
    default     => "se estrena en {$days} días"
  };
 }

 public static  function fetch_end_create_movie(string $api_url): NextMovie 
 {
   $result = file_get_contents($api_url); // si solo quieres hacer un GET de una api
   $data = json_decode($result, true); 
   return new self (
     $data["title"],
     $data["days_until"],
     $data["following_productions"]["title"] ?? "Desconocido",
     $data["release_date"],
     $data["poster_url"],
     $data["overview_url"]
   );
 }

 public function get_data()
 {
  return get_object_vars($this);
 }
 
}