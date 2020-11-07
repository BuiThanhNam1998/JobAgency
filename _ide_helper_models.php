<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Danhgia
 *
 * @property int $id
 * @property int $lichhen_id
 * @property int $user_id
 * @property int $trinhdo_id
 * @property float $diemchuyenmon
 * @property string $nhanxet
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\lichhen $lichhen
 * @property-read \App\Trinhdo $trinhdo
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereDiemchuyenmon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereLichhenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereNhanxet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereTrinhdoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Danhgia whereUserId($value)
 */
	class Danhgia extends \Eloquent {}
}

namespace App{
/**
 * App\hoso
 *
 * @property int $id
 * @property string $ten
 * @property string $socmt
 * @property \Illuminate\Support\Carbon $ngaycapcmt
 * @property int $noicapcmt_id
 * @property \Illuminate\Support\Carbon $ngaysinh
 * @property int $gioitinh
 * @property \Illuminate\Support\Carbon|null $ngaycothebatdaulamviec
 * @property string $sodienthoai
 * @property string $email
 * @property string $quanhuyen
 * @property string $diachichitiet
 * @property string $hocvan
 * @property string|null $kinhnghiemlamviec
 * @property string|null $ngonngu
 * @property string|null $cacgiaychungnhan_chungchi
 * @property int $ungvien_id
 * @property int $trangthai_hoso_id
 * @property int $thanhpho_id
 * @property int $tintuyendung_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Tinh\Thanhpho $noicapcmt
 * @property-read \App\Tinh\Thanhpho $thanhpho
 * @property-read \App\tintuyendung $tintuyendung
 * @property-read \App\trangthai_hoso $trangthai_hoso
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereCacgiaychungnhanChungchi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereDiachichitiet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereHocvan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereKinhnghiemlamviec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereNgaycapcmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereNgaycothebatdaulamviec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereNgonngu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereNoicapcmtId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereQuanhuyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereSocmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereThanhphoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereTintuyendungId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereTrangthaiHosoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereUngvienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\hoso whereUpdatedAt($value)
 */
	class hoso extends \Eloquent {}
}

namespace App{
/**
 * App\lichhen
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $thoigian
 * @property string $diadiem
 * @property string $mota
 * @property int $trangthai_id
 * @property int $hoso_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Danhgia[] $danhgias
 * @property-read int|null $danhgias_count
 * @property-read \App\hoso $hoso
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $nhanviens
 * @property-read int|null $nhanviens_count
 * @property-read \App\trangthai_lichhen $trangthai_lichhen
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereDiadiem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereHosoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereThoigian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereTrangthaiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\lichhen whereUpdatedAt($value)
 */
	class lichhen extends \Eloquent {}
}

namespace App{
/**
 * App\Nganh
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nganh whereUpdatedAt($value)
 */
	class Nganh extends \Eloquent {}
}

namespace App{
/**
 * App\Slide
 *
 * @property int $id
 * @property string $anh
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereAnh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereUpdatedAt($value)
 */
	class Slide extends \Eloquent {}
}

namespace App\Tinh{
/**
 * App\Tinh\Thanhpho
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tinh\Thanhpho whereUpdatedAt($value)
 */
	class Thanhpho extends \Eloquent {}
}

namespace App{
/**
 * App\tintuyendung
 *
 * @property int $id
 * @property string $mota
 * @property string $tieude
 * @property \Illuminate\Support\Carbon $ngaydang
 * @property string|null $anh
 * @property int $nganh_id
 * @property int $trangthai_id
 * @property int|null $luong
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\hoso[] $hosos
 * @property-read int|null $hosos_count
 * @property-read \App\Nganh $nganh
 * @property-read \App\trangthai_tintuyendung $trangthai_tintuyendung
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereAnh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereLuong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereNganhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereNgaydang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereTieude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereTrangthaiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\tintuyendung whereUpdatedAt($value)
 */
	class tintuyendung extends \Eloquent {}
}

namespace App{
/**
 * App\trangthai_hoso
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_hoso whereUpdatedAt($value)
 */
	class trangthai_hoso extends \Eloquent {}
}

namespace App{
/**
 * App\trangthai_lichhen
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_lichhen whereUpdatedAt($value)
 */
	class trangthai_lichhen extends \Eloquent {}
}

namespace App{
/**
 * App\trangthai_tintuyendung
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\trangthai_tintuyendung whereUpdatedAt($value)
 */
	class trangthai_tintuyendung extends \Eloquent {}
}

namespace App{
/**
 * App\Trinhdo
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trinhdo whereUpdatedAt($value)
 */
	class Trinhdo extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int $vaitro_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\hoso[] $hosos
 * @property-read int|null $hosos_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\vaitro $vaitro
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereVaitroId($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App{
/**
 * App\vaitro
 *
 * @property int $id
 * @property string $ten
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\vaitro whereUpdatedAt($value)
 */
	class vaitro extends \Eloquent {}
}

