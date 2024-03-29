<?php
namespace app\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table='kullanıcılar';
    protected $primaryKey='kullanici_id';

    protected $returnType='array';
    protected $useSoftDeletes=true;

    protected $allowedFields=['isim','soyisim','kullanıcı_Adı','tc_kimlik','e_mail','telefon_numarası','cinsiyet',
    'yaş','şifre','müşteri_mesleği','bakiye'];

    protected $validationRules=[
        'isim'=>'required|string|min_length[3]',
        'e_mail'=>'required|valid_email|is_unique[kullanıcılar.e_mail]',
        'telefon_numarası'=>'required|numeric|min_length[10]|max_length[11]|is_unique[kullanıcılar.telefon_numarası]'

    ];
    protected $validationMessage=[
        'isim'=>[
            'required'=>'Kullanıcı adı ve soyadı zorunlu alandır',
            'string'=>'Kullanıcı adı alfabetik karakterler barındırmalıdır',
            'min_length'=>'Kullanıcı adı en az 3 karakterden oluşmalıdır'
        ],
        'e_mail'=>[
            'required'=>'E-mail alanı boş geçilemez',
            'valid_email'=>'Lütfen geçerli bir e-mail adresi giriniz',
            'is_unique'=>'Bu e-mail başka hesap tarafından kullanılmaktadır'
        ],
        'telefon_numarası'=>[
            'required'=>'Telefon numarası alanı boş geçilemez',
            'numeric'=>'Telefon numarası rakamlardan oluşabilir',
            'min_length'=>'Telefon numarası en az 10 karakterden oluşmalıdır',
            'max_length'=>'Telefon numarası en fazla 11 karakterden oluşmalıdır',
            'is_unique'=>'Bu telefon numarası başka hesap tarafından kullanılmaktadır'
        ]
        ];

}