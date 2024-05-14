<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['ReservationID', 'NIKID', 'RoomID', 'CheckInDate', 'CheckOutDate', 'TotalAmount', 'idPenyewaanMobil'];
}
?>