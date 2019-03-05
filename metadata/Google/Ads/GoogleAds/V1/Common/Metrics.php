<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/metrics.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Common;

class Metrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\InteractionEventType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\QualityScoreBucket::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8d330a2c676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f6d6574726963732e70726f746f121e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e1a38676f6f676c652f" .
            "6164732f676f6f676c656164732f76312f656e756d732f7175616c697479" .
            "5f73636f72655f6275636b65742e70726f746f1a1e676f6f676c652f7072" .
            "6f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f" .
            "6170692f616e6e6f746174696f6e732e70726f746f22d22f0a074d657472" .
            "69637312480a226162736f6c7574655f746f705f696d7072657373696f6e" .
            "5f70657263656e74616765185f2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512350a0f6163746976655f7669" .
            "65775f63706d18012001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512350a0f6163746976655f766965775f6374" .
            "72184f2001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c7565123c0a176163746976655f766965775f696d7072657373" .
            "696f6e7318022001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c7565123f0a196163746976655f766965775f6d65617375" .
            "726162696c69747918602001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512470a226163746976655f766965775f" .
            "6d656173757261626c655f636f73745f6d6963726f7318032001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756512470a" .
            "226163746976655f766965775f6d656173757261626c655f696d70726573" .
            "73696f6e7318042001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c7565123d0a176163746976655f766965775f76696577" .
            "6162696c69747918612001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c7565124c0a26616c6c5f636f6e76657273696f" .
            "6e735f66726f6d5f696e746572616374696f6e735f726174651841200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "65123b0a15616c6c5f636f6e76657273696f6e735f76616c756518422001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512350a0f616c6c5f636f6e76657273696f6e7318072001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c756512440a" .
            "1e616c6c5f636f6e76657273696f6e735f76616c75655f7065725f636f73" .
            "74183e2001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c7565125d0a37616c6c5f636f6e76657273696f6e735f66726f" .
            "6d5f696e746572616374696f6e735f76616c75655f7065725f696e746572" .
            "616374696f6e18432001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512320a0c617665726167655f636f73741808" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556" .
            "616c756512310a0b617665726167655f63706318092001280b321c2e676f" .
            "6f676c652e70726f746f6275662e446f75626c6556616c756512310a0b61" .
            "7665726167655f63706518622001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e446f75626c6556616c756512310a0b617665726167655f6370" .
            "6d180a2001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c756512310a0b617665726167655f637076180b2001280b321c" .
            "2e676f6f676c652e70726f746f6275662e446f75626c6556616c75651237" .
            "0a11617665726167655f6672657175656e6379180c2001280b321c2e676f" .
            "6f676c652e70726f746f6275662e446f75626c6556616c756512380a1261" .
            "7665726167655f706167655f766965777318632001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512360a10617665" .
            "726167655f706f736974696f6e180d2001280b321c2e676f6f676c652e70" .
            "726f746f6275662e446f75626c6556616c7565123a0a1461766572616765" .
            "5f74696d655f6f6e5f7369746518542001280b321c2e676f6f676c652e70" .
            "726f746f6275662e446f75626c6556616c7565123f0a1962656e63686d61" .
            "726b5f617665726167655f6d61785f637063180e2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512330a0d6265" .
            "6e63686d61726b5f637472184d2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512310a0b626f756e63655f7261" .
            "7465180f2001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c7565122b0a06636c69636b7318132001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c7565124a0a24636f6e" .
            "74656e745f6275646765745f6c6f73745f696d7072657373696f6e5f7368" .
            "61726518142001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c7565123e0a18636f6e74656e745f696d7072657373696f" .
            "6e5f736861726518152001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512500a2a636f6e76657273696f6e5f6c61" .
            "73745f72656365697665645f726571756573745f646174655f74696d6518" .
            "492001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512450a1f636f6e76657273696f6e5f6c6173745f636f6e7665" .
            "7273696f6e5f64617465184a2001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512480a22636f6e74656e745f7261" .
            "6e6b5f6c6f73745f696d7072657373696f6e5f736861726518162001280b" .
            "321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565" .
            "12480a22636f6e76657273696f6e735f66726f6d5f696e74657261637469" .
            "6f6e735f7261746518452001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512370a11636f6e76657273696f6e735f" .
            "76616c756518462001280b321c2e676f6f676c652e70726f746f6275662e" .
            "446f75626c6556616c756512400a1a636f6e76657273696f6e735f76616c" .
            "75655f7065725f636f737418472001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512590a33636f6e76657273696f" .
            "6e735f66726f6d5f696e746572616374696f6e735f76616c75655f706572" .
            "5f696e746572616374696f6e18482001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e446f75626c6556616c756512310a0b636f6e7665727369" .
            "6f6e7318192001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c756512300a0b636f73745f6d6963726f73181a2001280b" .
            "321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512" .
            "3e0a18636f73745f7065725f616c6c5f636f6e76657273696f6e73184420" .
            "01280b321c2e676f6f676c652e70726f746f6275662e446f75626c655661" .
            "6c756512390a13636f73745f7065725f636f6e76657273696f6e181c2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512520a2c636f73745f7065725f63757272656e745f6d6f64656c5f61" .
            "7474726962757465645f636f6e76657273696f6e186a2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c7565123e0a18" .
            "63726f73735f6465766963655f636f6e76657273696f6e73181d2001280b" .
            "321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565" .
            "12290a03637472181e2001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c7565124a0a2463757272656e745f6d6f64656c" .
            "5f617474726962757465645f636f6e76657273696f6e7318652001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "610a3b63757272656e745f6d6f64656c5f617474726962757465645f636f" .
            "6e76657273696f6e735f66726f6d5f696e746572616374696f6e735f7261" .
            "746518662001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c756512720a4c63757272656e745f6d6f64656c5f61747472" .
            "6962757465645f636f6e76657273696f6e735f66726f6d5f696e74657261" .
            "6374696f6e735f76616c75655f7065725f696e746572616374696f6e1867" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556" .
            "616c756512500a2a63757272656e745f6d6f64656c5f6174747269627574" .
            "65645f636f6e76657273696f6e735f76616c756518682001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512590a33" .
            "63757272656e745f6d6f64656c5f617474726962757465645f636f6e7665" .
            "7273696f6e735f76616c75655f7065725f636f737418692001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c756512350a" .
            "0f656e676167656d656e745f72617465181f2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c756512300a0b656e6761" .
            "67656d656e747318202001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c756512450a1f686f74656c5f617665726167655f" .
            "6c6561645f76616c75655f6d6963726f73184b2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512730a21686973" .
            "746f726963616c5f63726561746976655f7175616c6974795f73636f7265" .
            "18502001280e32482e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e656e756d732e5175616c69747953636f72654275636b6574456e75" .
            "6d2e5175616c69747953636f72654275636b657412770a25686973746f72" .
            "6963616c5f6c616e64696e675f706167655f7175616c6974795f73636f72" .
            "6518512001280e32482e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e656e756d732e5175616c69747953636f72654275636b6574456e" .
            "756d2e5175616c69747953636f72654275636b6574123d0a18686973746f" .
            "726963616c5f7175616c6974795f73636f726518522001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c756512710a1f6869" .
            "73746f726963616c5f7365617263685f7072656469637465645f63747218" .
            "532001280e32482e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e656e756d732e5175616c69747953636f72654275636b6574456e756d" .
            "2e5175616c69747953636f72654275636b657412330a0e676d61696c5f66" .
            "6f72776172647318552001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c756512300a0b676d61696c5f7361766573185620" .
            "01280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c" .
            "7565123b0a16676d61696c5f7365636f6e646172795f636c69636b731857" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c756512350a10696d7072657373696f6e5f726561636818242001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c75651230" .
            "0a0b696d7072657373696f6e7318252001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c756512360a10696e746572616374" .
            "696f6e5f7261746518262001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512310a0c696e746572616374696f6e73" .
            "18272001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c7565126d0a17696e746572616374696f6e5f6576656e745f747970" .
            "657318642003280e324c2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e656e756d732e496e746572616374696f6e4576656e74547970" .
            "65456e756d2e496e746572616374696f6e4576656e745479706512380a12" .
            "696e76616c69645f636c69636b5f7261746518282001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512330a0e696e" .
            "76616c69645f636c69636b7318292001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c7565123a0a1470657263656e745f6e" .
            "65775f76697369746f7273182a2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512300a0b70686f6e655f63616c" .
            "6c73182b2001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c756512360a1170686f6e655f696d7072657373696f6e73182c" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c756512380a1270686f6e655f7468726f7567685f72617465182d200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "6512320a0c72656c61746976655f637472182e2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c7565124a0a24736561" .
            "7263685f6162736f6c7574655f746f705f696d7072657373696f6e5f7368" .
            "617265184e2001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c756512560a307365617263685f6275646765745f6c6f73" .
            "745f6162736f6c7574655f746f705f696d7072657373696f6e5f73686172" .
            "6518582001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c756512490a237365617263685f6275646765745f6c6f73745f" .
            "696d7072657373696f6e5f7368617265182f2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c7565124d0a2773656172" .
            "63685f6275646765745f6c6f73745f746f705f696d7072657373696f6e5f" .
            "736861726518592001280b321c2e676f6f676c652e70726f746f6275662e" .
            "446f75626c6556616c756512380a127365617263685f636c69636b5f7368" .
            "61726518302001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c756512490a237365617263685f65786163745f6d617463" .
            "685f696d7072657373696f6e5f736861726518312001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c7565123d0a177365" .
            "617263685f696d7072657373696f6e5f736861726518322001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c756512540a" .
            "2e7365617263685f72616e6b5f6c6f73745f6162736f6c7574655f746f70" .
            "5f696d7072657373696f6e5f7368617265185a2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512470a21736561" .
            "7263685f72616e6b5f6c6f73745f696d7072657373696f6e5f7368617265" .
            "18332001280b321c2e676f6f676c652e70726f746f6275662e446f75626c" .
            "6556616c7565124b0a257365617263685f72616e6b5f6c6f73745f746f70" .
            "5f696d7072657373696f6e5f7368617265185b2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512410a1b736561" .
            "7263685f746f705f696d7072657373696f6e5f7368617265185c2001280b" .
            "321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565" .
            "123f0a19746f705f696d7072657373696f6e5f70657263656e7461676518" .
            "5d2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c7565123f0a1976616c75655f7065725f616c6c5f636f6e76657273" .
            "696f6e7318342001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c7565123a0a1476616c75655f7065725f636f6e766572" .
            "73696f6e18352001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c756512530a2d76616c75655f7065725f63757272656e" .
            "745f6d6f64656c5f617474726962757465645f636f6e76657273696f6e18" .
            "5e2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c7565123d0a17766964656f5f7175617274696c655f3130305f7261" .
            "746518362001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c7565123c0a16766964656f5f7175617274696c655f32355f" .
            "7261746518372001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c7565123c0a16766964656f5f7175617274696c655f35" .
            "305f7261746518382001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c7565123c0a16766964656f5f7175617274696c65" .
            "5f37355f7261746518392001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512350a0f766964656f5f766965775f72" .
            "617465183a2001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c756512300a0b766964656f5f7669657773183b2001280b" .
            "321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512" .
            "3d0a18766965775f7468726f7567685f636f6e76657273696f6e73183c20" .
            "01280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c" .
            "756542e7010a22636f6d2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e420c4d65747269637350726f746f50015a4467" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f6164732f676f6f676c656164732f76312f636f6d6d6f6e" .
            "3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f" .
            "676c654164732e56312e436f6d6d6f6eca021e476f6f676c655c4164735c" .
            "476f6f676c654164735c56315c436f6d6d6f6eea0222476f6f676c653a3a" .
            "4164733a3a476f6f676c654164733a3a56313a3a436f6d6d6f6e62067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

