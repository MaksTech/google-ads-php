<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Common;

class AdTypeInfos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdAsset::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CallConversionReportingState::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\DisplayAdFormatSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\MimeType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a872c0a32676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f61645f747970655f696e666f732e70726f746f121e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e1a4367" .
            "6f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f63" .
            "616c6c5f636f6e76657273696f6e5f7265706f7274696e675f7374617465" .
            "2e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76" .
            "312f656e756d732f646973706c61795f61645f666f726d61745f73657474" .
            "696e672e70726f746f1a2d676f6f676c652f6164732f676f6f676c656164" .
            "732f76312f656e756d732f6d696d655f747970652e70726f746f1a1e676f" .
            "6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c" .
            "676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22a4" .
            "010a0a546578744164496e666f122e0a08686561646c696e651801200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512320a0c6465736372697074696f6e3118022001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512320a0c646573" .
            "6372697074696f6e3218032001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756522f7020a12457870616e6465645465" .
            "78744164496e666f12340a0e686561646c696e655f706172743118012001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512340a0e686561646c696e655f706172743218022001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512340a0e" .
            "686561646c696e655f706172743318062001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512310a0b646573637269" .
            "7074696f6e18032001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512320a0c6465736372697074696f6e32180720" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565122b0a05706174683118042001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565122b0a057061746832180520" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c75652285050a0e43616c6c4f6e6c794164496e666f12320a0c636f756e" .
            "7472795f636f646518012001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756512320a0c70686f6e655f6e756d626572" .
            "18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512330a0d627573696e6573735f6e616d6518032001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "320a0c6465736372697074696f6e3118042001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512320a0c6465736372" .
            "697074696f6e3218052001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512300a0c63616c6c5f747261636b656418" .
            "062001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c5661" .
            "6c7565123b0a1764697361626c655f63616c6c5f636f6e76657273696f6e" .
            "18072001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56" .
            "616c756512430a1d70686f6e655f6e756d6265725f766572696669636174" .
            "696f6e5f75726c18082001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512370a11636f6e76657273696f6e5f6163" .
            "74696f6e18092001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c75651280010a1a636f6e76657273696f6e5f7265706f" .
            "7274696e675f7374617465180a2001280e325c2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d732e43616c6c436f6e766572" .
            "73696f6e5265706f7274696e675374617465456e756d2e43616c6c436f6e" .
            "76657273696f6e5265706f7274696e67537461746522500a1b457870616e" .
            "64656444796e616d69635365617263684164496e666f12310a0b64657363" .
            "72697074696f6e18012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c7565220d0a0b486f74656c4164496e666f2215" .
            "0a1353686f7070696e67536d6172744164496e666f22170a1553686f7070" .
            "696e6750726f647563744164496e666f22a9040a0b476d61696c4164496e" .
            "666f123b0a0674656173657218012001280b322b2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e2e476d61696c546561" .
            "73657212320a0c6865616465725f696d61676518022001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512350a0f6d" .
            "61726b6574696e675f696d61676518032001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c7565123e0a186d61726b6574" .
            "696e675f696d6167655f686561646c696e6518042001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512410a1b6d61" .
            "726b6574696e675f696d6167655f6465736372697074696f6e1805200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512630a266d61726b6574696e675f696d6167655f646973706c61795f63" .
            "616c6c5f746f5f616374696f6e18062001280b32332e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e636f6d6d6f6e2e446973706c6179" .
            "43616c6c546f416374696f6e12440a0e70726f647563745f696d61676573" .
            "18072003280b322c2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e50726f64756374496d61676512440a0e70726f64" .
            "7563745f766964656f7318082003280b322c2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e50726f64756374566964" .
            "656f22d7010a0b476d61696c546561736572122e0a08686561646c696e65" .
            "18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512310a0b6465736372697074696f6e18022001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512330a" .
            "0d627573696e6573735f6e616d6518032001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512300a0a6c6f676f5f69" .
            "6d61676518042001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756522ac010a13446973706c617943616c6c546f4163" .
            "74696f6e122a0a047465787418012001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756512300a0a746578745f636f6c" .
            "6f7218022001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512370a1175726c5f636f6c6c656374696f6e5f696418" .
            "032001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756522cb010a0c50726f64756374496d61676512330a0d70726f64" .
            "7563745f696d61676518012001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512310a0b6465736372697074696f6e" .
            "18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512530a16646973706c61795f63616c6c5f746f5f61637469" .
            "6f6e18032001280b32332e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e446973706c617943616c6c546f416374696f" .
            "6e22430a0c50726f64756374566964656f12330a0d70726f647563745f76" .
            "6964656f18012001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756522f1040a0b496d6167654164496e666f12300a0b" .
            "706978656c5f776964746818042001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c756512310a0c706978656c5f68656967" .
            "687418052001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c7565122f0a09696d6167655f75726c18062001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512380a13" .
            "707265766965775f706978656c5f776964746818072001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c756512390a147072" .
            "65766965775f706978656c5f68656967687418082001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c756512370a11707265" .
            "766965775f696d6167655f75726c18092001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512470a096d696d655f74" .
            "797065180a2001280e32342e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e656e756d732e4d696d6554797065456e756d2e4d696d6554" .
            "797065122a0a046e616d65180b2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756512320a0a6d656469615f66696c" .
            "6518012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c75654800122b0a046461746118022001280b321b2e676f6f67" .
            "6c652e70726f746f6275662e427974657356616c75654800123f0a186164" .
            "5f69645f746f5f636f70795f696d6167655f66726f6d18032001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c7565480042" .
            "070a05696d616765221b0a19566964656f42756d706572496e5374726561" .
            "6d4164496e666f22210a1f566964656f4e6f6e536b69707061626c65496e" .
            "53747265616d4164496e666f228f010a1b566964656f5472756556696577" .
            "496e53747265616d4164496e666f12390a13616374696f6e5f627574746f" .
            "6e5f6c6162656c18012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512350a0f616374696f6e5f686561646c69" .
            "6e6518022001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756522790a14566964656f4f757473747265616d4164496e" .
            "666f122e0a08686561646c696e6518012001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512310a0b646573637269" .
            "7074696f6e18022001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c7565228e030a0b566964656f4164496e666f12300a" .
            "0a6d656469615f66696c6518012001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756512500a09696e5f73747265616d" .
            "18022001280b323b2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e566964656f5472756556696577496e5374726561" .
            "6d4164496e666f4800124b0a0662756d70657218032001280b32392e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e56" .
            "6964656f42756d706572496e53747265616d4164496e666f4800124a0a0a" .
            "6f75745f73747265616d18042001280b32342e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e566964656f4f75747374" .
            "7265616d4164496e666f480012580a0d6e6f6e5f736b69707061626c6518" .
            "052001280b323f2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e636f6d6d6f6e2e566964656f4e6f6e536b69707061626c65496e5374" .
            "7265616d4164496e666f480042080a06666f726d617422f5010a16526573" .
            "706f6e736976655365617263684164496e666f123e0a09686561646c696e" .
            "657318012003280b322b2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e416454657874417373657412410a0c646573" .
            "6372697074696f6e7318022003280b322b2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e636f6d6d6f6e2e4164546578744173736574" .
            "122b0a05706174683118032001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c7565122b0a05706174683218042001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "22fd060a1d4c6567616379526573706f6e73697665446973706c61794164" .
            "496e666f12340a0e73686f72745f686561646c696e6518012001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651233" .
            "0a0d6c6f6e675f686561646c696e6518022001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512310a0b6465736372" .
            "697074696f6e18032001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c756512330a0d627573696e6573735f6e616d6518" .
            "042001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512380a14616c6c6f775f666c657869626c655f636f6c6f7218" .
            "052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c5661" .
            "6c756512320a0c616363656e745f636f6c6f7218062001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512300a0a6d" .
            "61696e5f636f6c6f7218072001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512390a1363616c6c5f746f5f616374" .
            "696f6e5f7465787418082001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756512300a0a6c6f676f5f696d6167651809" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512370a117371756172655f6c6f676f5f696d616765180a200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512350a0f6d61726b6574696e675f696d616765180b2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c7565123c0a16" .
            "7371756172655f6d61726b6574696e675f696d616765180c2001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651268" .
            "0a0e666f726d61745f73657474696e67180d2001280e32502e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e656e756d732e446973706c" .
            "61794164466f726d617453657474696e67456e756d2e446973706c617941" .
            "64466f726d617453657474696e6712320a0c70726963655f707265666978" .
            "180e2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512300a0a70726f6d6f5f74657874180f2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756542eb010a" .
            "22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e4210416454797065496e666f7350726f746f50015a44676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f6164732f676f6f676c656164732f76312f636f6d6d6f6e3b63" .
            "6f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c" .
            "654164732e56312e436f6d6d6f6eca021e476f6f676c655c4164735c476f" .
            "6f676c654164735c56315c436f6d6d6f6eea0222476f6f676c653a3a4164" .
            "733a3a476f6f676c654164733a3a56313a3a436f6d6d6f6e620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

