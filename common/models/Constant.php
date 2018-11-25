<?php


namespace common\models;

class Constant
{
    const IOS = 1;
    const ANDROID = 0;

    const ALERT_NOT_SEEN = 0;
    const ALERT_SEEN = 1;
    
    const ACTIVE = 1;
    const DENY = 0;

    const USER_ADMIN = 'admin';
    const USER_TELESALES = 'Telesales';

    const USER_OWNER_PRODUCT = 'owner_product';
    const USER_OWNER_VEHICLE = 'owner_vehicle';
    const USER_DRIVER = 'driver';

    const SOUND_TYPE_NEW_BOOKING = 1;

    const ORDER_MEDIA_TYPE_EIR = 1;
    const ORDER_MEDIA_TYPE_NORMAL = 0;

    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;
    const STATUS_DEACTIVE = 2;

    const ACCEPT_VEHICLE = 1;
    const DENY_VEHICLE = 0;

    const ACCEPT_TRUCK = 1;
    const DENY_TRUCK = 0;

    const ACCEPT_CONTAINER = 1;
    const DENY_CONTAINER = 0;

    const ACCEPT_CONTRACT_VEHICLE = 1;
    const DENY_CONTRACT_VEHICLE = 0;

    const ACCEPT_CONTRACT_TRUCK = 1;
    const DENY_CONTRACT_TRUCK = 0;

    const ACCEPT_CONTRACT_CONTAINER = 1;
    const DENY_CONTRACT_CONTAINER = 0;

    const BOOKING_VEHICLE_PRODUCT = 1;
    const BOOKING_TRUCK = 2;
    const BOOKING_CONTAINER = 3;

    const PAYMENT_BY_CASH = 1;
    const PAYMENT_BY_CONTRACT = 2;

    const BOOKING_STATUS_BIDDING = 1;
    const BOOKING_STATUS_CANCELLED = 2;
    const BOOKING_STATUS_EXPIRED = 3;
    const BOOKING_STATUS_DONE = 4;
    const BOOKING_STATUS_ACCEPTED = 5;

    const IMAGE_THUMB = 'THUMB';
    const IMAGE_SMALL = 'SMALL';
    const IMAGE_MEDIUM = 'MEDIUM';
    const IMAGE_LARGE = 'LARGE';
    const IMAGE_ORIGIN = 'ORIGIN';

    const ORDER_STASTUS_BIDDING = 1;
    const ORDER_STASTUS_PROCESSING = 2;
    const ORDER_STASTUS_DONE = 3;
    const ORDER_STASTUS_CANCEL = 4;

    const ORDER_CONFIRMED = 1;
    const ORDER_NOT_CONFIRMED = 0;

    const ORDER_MEDIA_TYPE_CUSTOMS_DECLARATION = 1;
    const ORDER_MEDIA_TYPE_SHIPMENT = 2;

    const SCREEN_BOOKING_DETAIL = 1;
    const SCREEN_BOOKING_OFFER_DETAIL = 2;
    const SCREEN_DETAIL_ORDER = 3;
    const SCREEN_TRACKING_MAP = 4;
    const SCREEN_LIST_DRIVERS = 5;
    const SCREEN_LIST_VEHICLES = 6;

    const DEFAULT_ADMIN_ACTIVE_DRIVER = 0;
    const DEFAULT_ADMIN_ACTIVE_VEHICLE = 0;

    const DRIVER_ACTIVE_BY_ADMIN = 1;
    const DRIVER_DEACTIVE_BY_ADMIN = 0;

    const VEHICLE_ACTIVE_BY_ADMIN = 1;
    const VEHICLE_DEACTIVE_BY_ADMIN = 0;

    const DIRECTION_CONFIG_REVERSED_YES = 1;
    const DIRECTION_CONFIG_REVERSED_NO = 0;

    const INDEBTEDNESS_IS_DEBIT_YES = 1;
    const INDEBTEDNESS_IS_DEBIT_NO = 0;
    const INDEBTEDNESS_IS_PAID_YES = 1;
    const INDEBTEDNESS_IS_PAID_NO = 0;

    const IS_CONTAINER_LOAD_NO = 0;
    const IS_CONTAINER_LOAD_YES = 1;

    const AUTH_ITEM_ID_DRIVER = 2;
    const AUTH_ITEM_ID_OWNER_PRODUCT = 3;
    const AUTH_ITEM_ID_OWNER_VEHICLE = 4;


    const STATUS_ORDER_TRUCK_CANCEL = 0;
    const STATUS_ORDER_TRUCK_WAITING = 1;
    const STATUS_ORDER_TRUCK_START = 2;
    const STATUS_ORDER_TRUCK_LOAD_PLACE = 3;
    const STATUS_ORDER_TRUCK_LOAD_PLACE_LEAVE = 4;
    const STATUS_ORDER_TRUCK_DELIVERY = 5;
    const STATUS_ORDER_TRUCK_FINISH = 10;

    const STATUS_ORDER_CONTAINER_OUT_CANCEL = 0;
    const STATUS_ORDER_CONTAINER_OUT_WAITING = 1;
    const STATUS_ORDER_CONTAINER_OUT_START = 2;
    const STATUS_ORDER_CONTAINER_OUT_TO_WAREHOUSE = 3;
    const STATUS_ORDER_CONTAINER_OUT_LOADED_PRODUCT_TO_PORT = 4;
    const STATUS_ORDER_CONTAINER_OUT_LOWER_WAREHOUSE = 5;
    const STATUS_ORDER_CONTAINER_OUT_FINISH = 10;

    const STATUS_ORDER_CONTAINER_IN_CANCEL = 0;
    const STATUS_ORDER_CONTAINER_IN_WAITING = 1;
    const STATUS_ORDER_CONTAINER_IN_START = 2;
    const STATUS_ORDER_CONTAINER_IN_TO_PORT = 3;
    const STATUS_ORDER_CONTAINER_IN_LOADED_PRODUCT = 4;
    const STATUS_ORDER_CONTAINER_IN_TO_STORE_WATING_DROP_PRODUCT = 5;
    const STATUS_ORDER_CONTAINER_IN_LOWER_WAREHOUSE = 6;
    const STATUS_ORDER_CONTAINER_IN_TO_DEPOT = 7;
    const STATUS_ORDER_CONTAINER_IN_FINISH = 10;

    const STATUS_ORDER_VEHICLE_PRODUCT_CANCEL = 0;
    const STATUS_ORDER_VEHICLE_PRODUCT_WAITING = 1;
    const STATUS_ORDER_VEHICLE_PRODUCT_START = 2;
    const STATUS_ORDER_VEHICLE_PRODUCT_LOAD_PLACE = 3;
    const STATUS_ORDER_VEHICLE_PRODUCT_LOAD_PLACE_LEAVE = 4;
    const STATUS_ORDER_VEHICLE_PRODUCT_DELIVERY = 5;
    const STATUS_ORDER_VEHICLE_PRODUCT_FINISH = 10;

    const STAUS_ORDER_VEHICLE_DEFAULT = 1;

    const EMAIL_SENDTO_ALL = 1;
    const EMAIL_SENDTO_ADMIN = 2;
    const EMAIL_SENDTO_OWNER_PRODUCT = 3;
    const EMAIL_SENDTO_OWNER_VEHICLE = 4;
    const EMAIL_SENDTO_TELESALES = 5;
    const EMAIL_SENDTO_DRIVER = 6;

    const DRIVER_IS_PROCESSING = 1;
    const DRIVER_IS_FREE = 0;

    const VEHICLE_IS_RPOCESSING = 1;
    const VEHICLE_IS_PREE = 0;


    public static function listDirectionConfigOptions()
    {
        return [
            [
                'id' => self::DIRECTION_CONFIG_REVERSED_YES,
                'name' => '2 Chiều',
            ],
            [
                'id' => self::DIRECTION_CONFIG_REVERSED_NO,
                'name' => '1 Chiều',
            ],
        ];
    }

    public static function getListDirectionConfigOptions()
    {
        return [
            self::DIRECTION_CONFIG_REVERSED_YES => '2 Chiều',
            self::DIRECTION_CONFIG_REVERSED_NO => '1 Chiều',
        ];
    }

    public static function getDirectionConfigOptionText($id)
    {
        $options = self::getListDirectionConfigOptions();

        return !empty($options[$id]) ? $options[$id] : '';
    }

    public static function listOrderMediaTypes()
    {

        return [
            [
                'id' => self::ORDER_MEDIA_TYPE_CUSTOMS_DECLARATION,
                'name' => 'Tờ khai hải quan',
            ],
            [
                'id' => self::ORDER_MEDIA_TYPE_SHIPMENT,
                'name' => 'Lô hàng',
            ],
        ];
    }

    public static function getListOrderMedias()
    {
        return [
            self::ORDER_MEDIA_TYPE_CUSTOMS_DECLARATION => 'Tờ khai hải quan',
            self::ORDER_MEDIA_TYPE_SHIPMENT => 'Lô hàng',
        ];
    }

    public static function getOrderMediaText($id)
    {
        $listMedias = self::getListOrderMedias();

        return !empty($listMedias[$id]) ? $listMedias[$id] : '';
    }


    public static function listPaymentMethods()
    {
        // TODO: get from `settings` table
        return [
            [
                'id' => self::PAYMENT_BY_CASH,
                'name' => 'Tiền mặt',
            ],
            [
                'id' => self::PAYMENT_BY_CONTRACT,
                'name' => 'Hợp đồng',
            ],
        ];
    }

    public static function listThumb()
    {
        return [
            self::IMAGE_THUMB,
            self::IMAGE_SMALL,
            self::IMAGE_MEDIUM,
            self::IMAGE_LARGE,
            self::IMAGE_ORIGIN
        ];
    }

    public static function listStatus()
    {
        return [
            [
                'id' => self::STATUS_ACTIVE,
                'name' => 'Active',
            ],
            [
                'id' => self::STATUS_DEACTIVE,
                'name' => 'Deactive',
            ],
            [
                'id' => self::STATUS_DELETED,
                'name' => 'Deleted',
            ]
        ];
    }

    public static function getListStatus()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_DEACTIVE => 'Deactive',
            self::STATUS_DELETED => 'Deleted'
        ];
    }

    public static function getStatusText($id)
    {
        $listStatus = self::getListStatus();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListStatusDriverByAdmin()
    {
        return [
            self::DRIVER_ACTIVE_BY_ADMIN => 'Active',
            self::DRIVER_DEACTIVE_BY_ADMIN => 'Deactive',
        ];
    }

    public static function getStatusDriverByAdminText($id)
    {
        $listStatus = self::getListStatusDriverByAdmin();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListStatusVehicleByAdmin()
    {
        return [
            self::VEHICLE_ACTIVE_BY_ADMIN => 'Active',
            self::VEHICLE_DEACTIVE_BY_ADMIN => 'Deactive',
        ];
    }

    public static function getStatusVehicleByAdminText($id)
    {
        $listStatus = self::getListStatusVehicleByAdmin();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function listBookingTypes()
    {
        return [
            [
                'id' => self::BOOKING_VEHICLE_PRODUCT,
                'name' => 'Booking Vehicle',
            ],
            [
                'id' => self::BOOKING_TRUCK,
                'name' => 'Booking Truck',
            ],
            [
                'id' => self::BOOKING_CONTAINER,
                'name' => 'Booking Container',
            ]
        ];
    }

    public static function getPaymentMethods()
    {
        return [
            self::PAYMENT_BY_CASH => 'Tiền mặt',
            self::PAYMENT_BY_CONTRACT => 'Hợp đồng'
        ];
    }

    public static function getPaymentMethodText($id)
    {
        $listMethods = self::getPaymentMethods();

        return !empty($listMethods[$id]) ? $listMethods[$id] : '';
    }

    public static function listOrderStatus()
    {
        return [
            [
                'id' => self::ORDER_STASTUS_BIDDING,
                'name' => 'Chờ thực hiện',
            ],
            [
                'id' => self::ORDER_STASTUS_PROCESSING,
                'name' => 'Đang thực hiện',
            ],
            [
                'id' => self::ORDER_STASTUS_DONE,
                'name' => 'Hoàn thành',
            ],
            [
                'id' => self::ORDER_STASTUS_CANCEL,
                'name' => 'Đã Hủy',
            ]
        ];
    }

    public static function getListOrderStatus()
    {
        return [
            self::ORDER_STASTUS_BIDDING => 'Chờ thực hiện',
            self::ORDER_STASTUS_PROCESSING => 'Đang thực hiện',
            self::ORDER_STASTUS_DONE => 'Hoàn thành',
            self::ORDER_STASTUS_CANCEL => 'Đã Hủy',
        ];
    }

    public static function getOrderStatusText($id)
    {
        $listStatus = self::getListOrderStatus();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function listBookingStatus()
    {
        return [
            [
                'id' => self::BOOKING_STATUS_BIDDING,
                'name' => 'Chờ báo giá',
            ],
            [
                'id' => self::BOOKING_STATUS_CANCELLED,
                'name' => 'Hủy báo giá',
            ],
            [
                'id' => self::BOOKING_STATUS_EXPIRED,
                'name' => 'Hết hạn',
            ],
            [
                'id' => self::BOOKING_STATUS_DONE,
                'name' => 'Hoàn thành',
            ],
            [
                'id' => self::BOOKING_STATUS_ACCEPTED,
                'name' => 'Chấp nhận',
            ]
        ];
    }

    public static function getListBookingStatus()
    {
        return [
            self::BOOKING_STATUS_BIDDING => 'Chờ báo giá',
            self::BOOKING_STATUS_CANCELLED => 'Hủy báo giá',
            self::BOOKING_STATUS_EXPIRED => 'Hết hạn',
            self::BOOKING_STATUS_DONE => 'Hoàn thành',
            self::BOOKING_STATUS_ACCEPTED => 'Đồng ý'
        ];
    }

    public static function getListBookingStatusText($id)
    {
        $listStatus = self::getListBookingStatus();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListBookingOfferStatus()
    {
        return [
            self::BOOKING_STATUS_BIDDING => 'Chờ dồng ý',
            self::BOOKING_STATUS_CANCELLED => 'Hủy báo giá',
            self::BOOKING_STATUS_EXPIRED => 'Hết hạn',
            self::BOOKING_STATUS_DONE => 'Hoàn thành',
            self::BOOKING_STATUS_ACCEPTED => 'Chấp nhận'
        ];
    }

    public static function getBookingStatusText($id)
    {
        $listStatus = self::getListBookingOfferStatus();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function listScreens()
    {
        return [
            [
                'id' => self::SCREEN_BOOKING_DETAIL,
                'text' => 'Màn hình chi tiết tìm xe',
            ],
            [
                'id' => self::SCREEN_BOOKING_OFFER_DETAIL,
                'text' => 'Màn hình chi tiết báo giá',
            ],
            [
                'id' => self::SCREEN_DETAIL_ORDER,
                'text' => 'Màn hình chi tiết đơn hàng',
            ],
            [
                'id' => self::SCREEN_TRACKING_MAP,
                'text' => 'Màn hình xem map',
            ],
            [
                'id' => self::SCREEN_LIST_DRIVERS,
                'text' => 'Màn hình danh sách tài xế',
            ],
            [
                'id' => self::SCREEN_LIST_VEHICLES,
                'text' => 'Màn hình danh sách xe',
            ]

        ];
    }

//Thêm mới TODO:: Thêm mới Constant
    public static function getListBookingTypes()
    {
        return [
            self::BOOKING_VEHICLE_PRODUCT => 'Booking Vehicle',
            self::BOOKING_TRUCK => 'Booking Truck',
            self::BOOKING_CONTAINER => 'Booking Container'
        ];
    }

    public static function getListBookingTypesText($id)
    {
        $listTypes = self::getListBookingTypes();

        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function getListPaymentMethods()
    {
        return [
            self::PAYMENT_BY_CASH => 'Tiền mặt',
            self::PAYMENT_BY_CONTRACT => 'Hợp đồng',
        ];
    }

    public static function getListPaymentMethodsText($id)
    {
        $listTypes = self::getListPaymentMethods();

        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function getBookingOfferStatusText($id)
    {
        $listStatus = self::getListBookingOfferStatus();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getBookingCode($code)
    {
        $arr = explode('-', $code);
        if (count($arr) == 3) {
            unset ($arr[1]);

            return implode('-', $arr);
        }
        return $code;
    }

    public static function listIncludedCost()
    {
        return [
            [
                'id' => 0,
                'text' => 'No',
            ],
            [
                'id' => 1,
                'text' => 'Yes',
            ],

        ];
    }

    public static function getListIncludedCost()
    {
        return [
            0 => 'No',
            1 => 'Yes'
        ];
    }

    public static function getListIncludedCostText($id)
    {
        $listTypes = self::getListIncludedCost();
        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function getListContainerLoad()
    {
        return [
            self::IS_CONTAINER_LOAD_NO => 'Trả rỗng',
            self::IS_CONTAINER_LOAD_YES => 'Lấy rỗng'
        ];
    }

    public static function getListContainerLoadText($id)
    {
        $listTypes = self::getListContainerLoad();
        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function formatNumber($number)
    {
        return number_format($number) . " VND";
    }

    public static function getListIndebtednessPaid()
    {
        return [
            self::INDEBTEDNESS_IS_PAID_NO => 'No',
            self::INDEBTEDNESS_IS_PAID_YES => 'Yes'
        ];
    }

    public static function getListIndebtednessPaidText($id)
    {
        $listTypes = self::getListIndebtednessPaid();
        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function getListIndebtednessDebit()
    {
        return [
            self::INDEBTEDNESS_IS_DEBIT_NO => 'No',
            self::INDEBTEDNESS_IS_DEBIT_YES => 'Yes'
        ];
    }

    public static function getListIndebtednessDebitText($id)
    {
        $listTypes = self::getListIndebtednessDebit();
        return !empty($listTypes[$id]) ? $listTypes[$id] : '';
    }

    public static function getStatusOrderLabel($status)
    {
        if ($status == self::ORDER_STASTUS_BIDDING) {
            return ("<span class='label label-info'>" . self::getOrderStatusText($status) . "</span>");
        } elseif ($status == self::ORDER_STASTUS_PROCESSING) {
            return ("<span class='label label-warning'>" . self::getOrderStatusText($status) . " <i class='fa fa-refresh fa-spin'></i></span>");
        } elseif ($status == self::ORDER_STASTUS_DONE) {
            return ("<span class='label label-success'>" . self::getOrderStatusText($status) . "</span>");
        } elseif ($status == self::ORDER_STASTUS_CANCEL) {
            return ("<span class='label label-danger'>" . self::getOrderStatusText($status) . "</span>");
        }
    }

    public static function getStatusBookingLabel($status)
    {
        if ($status == self::BOOKING_STATUS_BIDDING) {
            return ("<span class='label label-warning'>" . self::getListBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_CANCELLED) {
            return ("<span class='label label-danger'>" . self::getListBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_EXPIRED) {
            return ("<span class='label label-danger'>" . self::getListBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_DONE) {
            return ("<span class='label label-success'>" . self::getListBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_ACCEPTED) {
            return ("<span class='label label-info'>" . self::getListBookingStatusText($status) . "</span>");
        }
    }

    public static function getStatusUserLabel($status)
    {
        if ($status == self::STATUS_ACTIVE) {
            return ("<span class='label label-success'>" . self::getStatusText($status) . "</span>");
        } elseif ($status == self::STATUS_DELETED) {
            return ("<span class='label label-danger'>" . self::getStatusText($status) . "</span>");
        } elseif ($status == self::STATUS_DEACTIVE) {
            return ("<span class='label label-warning'>" . self::getStatusText($status) . "</span>");
        }
    }

    public static function getStatusBookingOfferLabel($status)
    {
        if ($status == self::BOOKING_STATUS_BIDDING) {
            return ("<span class='label label-warning'>" . self::getBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_CANCELLED) {
            return ("<span class='label label-danger'>" . self::getBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_EXPIRED) {
            return ("<span class='label label-danger'>" . self::getBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_DONE) {
            return ("<span class='label label-success'>" . self::getBookingStatusText($status) . "</span>");
        } elseif ($status == self::BOOKING_STATUS_ACCEPTED) {
            return ("<span class='label label-info'>" . self::getBookingStatusText($status) . "</span>");
        }
    }

    public static function getListStatusOrderTruck()
    {
        return [
            self::STATUS_ORDER_TRUCK_CANCEL => 'Hủy',
            self::STATUS_ORDER_TRUCK_WAITING => 'Chờ thực hiện',
            self::STATUS_ORDER_TRUCK_START => 'Bắt đầu',
            self::STATUS_ORDER_TRUCK_LOAD_PLACE => 'Đến nơi bốc hàng',
            self::STATUS_ORDER_TRUCK_LOAD_PLACE_LEAVE => 'Bốc hàng xong rời kho',
            self::STATUS_ORDER_TRUCK_DELIVERY => 'Giao hàng',
            self::STATUS_ORDER_TRUCK_FINISH => 'Hoàn thành',
        ];
    }

    public static function getListStatusOrderTruckText($id)
    {
        $listStatus = self::getListStatusOrderTruck();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListStatusOrderVehicleProduct()
    {
        return [
            self::STATUS_ORDER_VEHICLE_PRODUCT_CANCEL => 'Hủy',
            self::STATUS_ORDER_VEHICLE_PRODUCT_WAITING => 'Chờ thực hiện',
            self::STATUS_ORDER_VEHICLE_PRODUCT_START => 'Bắt đầu',
            self::STATUS_ORDER_VEHICLE_PRODUCT_LOAD_PLACE => 'Đến nơi bốc hàng',
            self::STATUS_ORDER_VEHICLE_PRODUCT_LOAD_PLACE_LEAVE => 'Bốc hàng xong rời kho',
            self::STATUS_ORDER_VEHICLE_PRODUCT_DELIVERY => 'Giao hàng',
            self::STATUS_ORDER_VEHICLE_PRODUCT_FINISH => 'Hoàn thành',
        ];
    }

    public static function getListStatusOrderVehicleProductText($id)
    {
        $listStatus = self::getListStatusOrderVehicleProduct();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListStatusOrderContainerOut()
    {
        return [
            self::STATUS_ORDER_CONTAINER_OUT_CANCEL => 'Hủy',
            self::STATUS_ORDER_CONTAINER_OUT_WAITING => 'Chờ thực hiện',
            self::STATUS_ORDER_CONTAINER_OUT_START => 'Bắt đầu',
            self::STATUS_ORDER_CONTAINER_OUT_TO_WAREHOUSE => 'Đến kho nhận hàng',
            self::STATUS_ORDER_CONTAINER_OUT_LOADED_PRODUCT_TO_PORT => 'Đóng hàng rời kho về cảng hạ',
            self::STATUS_ORDER_CONTAINER_OUT_LOWER_WAREHOUSE => 'Hạ bãi xong',
            self::STATUS_ORDER_CONTAINER_OUT_FINISH => 'Hoàn thành',
        ];
    }

    public static function getListStatusOrderContainerOutText($id)
    {
        $listStatus = self::getListStatusOrderContainerOut();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function getListStatusOrderContainerIn()
    {
        return [
            self::STATUS_ORDER_CONTAINER_IN_CANCEL => 'Hủy',
            self::STATUS_ORDER_CONTAINER_IN_WAITING => 'Chờ thực hiện',
            self::STATUS_ORDER_CONTAINER_IN_START => 'Bắt đầu',
            self::STATUS_ORDER_CONTAINER_IN_TO_PORT => 'Đến cảng nhận hàng',
            self::STATUS_ORDER_CONTAINER_IN_LOADED_PRODUCT => 'Nhận hàng xong và đến kho giao hàng',
            self::STATUS_ORDER_CONTAINER_IN_TO_STORE_WATING_DROP_PRODUCT => 'Đã đến kho chờ dỡ hàng xuống',
            self::STATUS_ORDER_CONTAINER_IN_LOWER_WAREHOUSE => 'Dỡ hàng xong rời kho về cảng/depot trả rỗng',
            self::STATUS_ORDER_CONTAINER_IN_TO_DEPOT => 'Trả rỗng',
            self::STATUS_ORDER_CONTAINER_IN_FINISH => 'Hoàn thành',
        ];
    }

    public static function getListStatusOrderContainerInText($id)
    {
        $listStatus = self::getListStatusOrderContainerIn();

        return !empty($listStatus[$id]) ? $listStatus[$id] : '';
    }

    public static function listStatusOrderDriverVehicle()
    {
        return [
            [
                'id' => 0,
                'text' => 'Hủy',
            ],
            [
                'id' => 1,
                'text' => 'Chờ thực hiện',
            ],
            [
                'id' => 2,
                'text' => 'Bắt đầu',
            ],
            [
                'id' => 3,
                'text' => 'Đến nơi bốc hàng',
            ],
            [
                'id' => 4,
                'text' => 'Bốc hàng xong rời kho',
            ],
            [
                'id' => 5,
                'text' => 'Giao hàng',
            ],
            [
                'id' => 10,
                'text' => 'Hoàn thành',
            ],

        ];
    }

    public static function listStatusOrderDriverTruck()
    {
        return [
            [
                'id' => 0,
                'text' => 'Hủy',
            ],
            [
                'id' => 1,
                'text' => 'Chờ thực hiện',
            ],
            [
                'id' => 2,
                'text' => 'Bắt đầu',
            ],
            [
                'id' => 3,
                'text' => 'Đến nơi bốc hàng',
            ],
            [
                'id' => 4,
                'text' => 'Bốc hàng xong rời kho',
            ],
            [
                'id' => 5,
                'text' => 'Giao hàng',
            ],
            [
                'id' => 10,
                'text' => 'Hoàn thành',
            ],
        ];
    }

    public static function listStatusOrderDriverContainerIn()
    {
        return [
            [
                'id' => 0,
                'text' => 'Hủy',
            ],
            [
                'id' => 1,
                'text' => 'Chờ thực hiện',
            ],
            [
                'id' => 2,
                'text' => 'Bắt đầu',
            ],
            [
                'id' => 3,
                'text' => 'Đến cảng nhận hàng',
            ],
            [
                'id' => 4,
                'text' => 'Nhận hàng xong và đến kho giao hàng',
            ],
            [
                'id' => 5,
                'text' => 'Đã đến kho chờ dỡ hàng xuống',
            ],
            [
                'id' => 6,
                'text' => 'Dỡ hàng xong rời kho về cảng/depot trả rỗng',
            ],
            [
                'id' => 7,
                'text' => 'Trả rỗng',
            ],
            [
                'id' => 10,
                'text' => 'Hoàn thành',
            ],

        ];
    }

    public static function listStatusOrderDriverContainerOut()
    {
        return [
            [
                'id' => 0,
                'text' => 'Hủy',
            ],
            [
                'id' => 1,
                'text' => 'Chờ thực hiện',
            ],
            [
                'id' => 2,
                'text' => 'Bắt đầu',
            ],
            [
                'id' => 3,
                'text' => 'Đến kho nhận hàng',
            ],
            [
                'id' => 4,
                'text' => 'Đóng hàng rời kho về cảng hạ',
            ],
            [
                'id' => 5,
                'text' => 'Hạ bãi xong',
            ],
            [
                'id' => 10,
                'text' => 'Hoàn thành',
            ],

        ];
    }

    public static function getStatusDriverOrder($status, $bookingType, $isLoadContainer = '')
    {
        if ($bookingType == Constant::BOOKING_VEHICLE_PRODUCT) {

            return Constant::getListStatusOrderVehicleProductText($status);
        }
        if ($bookingType == Constant::BOOKING_TRUCK) {

            return Constant::getListStatusOrderTruckText($status);
        }
        if ($bookingType == Constant::BOOKING_CONTAINER) {
            return Constant::getListStatusOrderContainerInText($status);
        }

        if ($bookingType = Constant::BOOKING_CONTAINER && $isLoadContainer == Constant::IS_CONTAINER_LOAD_NO) {

            return Constant::getListStatusOrderContainerInText($status);
        }
        if ($bookingType = Constant::BOOKING_CONTAINER && $isLoadContainer == Constant::IS_CONTAINER_LOAD_YES) {

            return Constant::getListStatusOrderContainerOutText($status);
        }
    }

    public static function getLCurrentRole()
    {
        return [
            self::USER_OWNER_PRODUCT => 'Chủ Hàng',
            self::USER_OWNER_VEHICLE => 'Chủ Xe',
            self::USER_DRIVER => 'Tài Xế',
        ];
    }

    public static function getLCurrentRoleText($id)
    {
        $listRole = self::getLCurrentRole();

        return !empty($listRole[$id]) ? $listRole[$id] : '';
    }
}