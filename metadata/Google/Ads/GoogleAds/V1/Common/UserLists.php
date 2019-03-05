<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/user_lists.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Common;

class UserLists
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CustomerMatchUploadKeyType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListCombinedRuleOperator::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListCrmDataSourceType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListDateRuleItemOperator::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListLogicalRuleOperator::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListNumberRuleItemOperator::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListPrepopulationStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListRuleType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\UserListStringRuleItemOperator::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aab210a2f676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f757365725f6c697374732e70726f746f121e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e1a44676f6f67" .
            "6c652f6164732f676f6f676c656164732f76312f656e756d732f75736572" .
            "5f6c6973745f636f6d62696e65645f72756c655f6f70657261746f722e70" .
            "726f746f1a42676f6f676c652f6164732f676f6f676c656164732f76312f" .
            "656e756d732f757365725f6c6973745f63726d5f646174615f736f757263" .
            "655f747970652e70726f746f1a45676f6f676c652f6164732f676f6f676c" .
            "656164732f76312f656e756d732f757365725f6c6973745f646174655f72" .
            "756c655f6974656d5f6f70657261746f722e70726f746f1a43676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f656e756d732f757365725f" .
            "6c6973745f6c6f676963616c5f72756c655f6f70657261746f722e70726f" .
            "746f1a47676f6f676c652f6164732f676f6f676c656164732f76312f656e" .
            "756d732f757365725f6c6973745f6e756d6265725f72756c655f6974656d" .
            "5f6f70657261746f722e70726f746f1a42676f6f676c652f6164732f676f" .
            "6f676c656164732f76312f656e756d732f757365725f6c6973745f707265" .
            "706f70756c6174696f6e5f7374617475732e70726f746f1a37676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f656e756d732f757365725f" .
            "6c6973745f72756c655f747970652e70726f746f1a47676f6f676c652f61" .
            "64732f676f6f676c656164732f76312f656e756d732f757365725f6c6973" .
            "745f737472696e675f72756c655f6974656d5f6f70657261746f722e7072" .
            "6f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e" .
            "70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e" .
            "70726f746f224b0a1353696d696c6172557365724c697374496e666f1234" .
            "0a0e736565645f757365725f6c69737418012001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756522a9020a1443726d" .
            "4261736564557365724c697374496e666f122c0a066170705f6964180120" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c756512710a0f75706c6f61645f6b65795f7479706518022001280e3258" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d73" .
            "2e437573746f6d65724d6174636855706c6f61644b657954797065456e75" .
            "6d2e437573746f6d65724d6174636855706c6f61644b6579547970651270" .
            "0a10646174615f736f757263655f7479706518032001280e32562e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e656e756d732e557365" .
            "724c69737443726d44617461536f7572636554797065456e756d2e557365" .
            "724c69737443726d44617461536f757263655479706522c0010a10557365" .
            "724c69737452756c65496e666f12570a0972756c655f7479706518012001" .
            "280e32442e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e557365724c69737452756c6554797065456e756d2e55736572" .
            "4c69737452756c655479706512530a1072756c655f6974656d5f67726f75" .
            "707318022003280b32392e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e557365724c69737452756c654974656d4772" .
            "6f7570496e666f22650a19557365724c69737452756c654974656d47726f" .
            "7570496e666f12480a0a72756c655f6974656d7318012003280b32342e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e" .
            "557365724c69737452756c654974656d496e666f22d3020a14557365724c" .
            "69737452756c654974656d496e666f122a0a046e616d6518012001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "560a106e756d6265725f72756c655f6974656d18022001280b323a2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e55" .
            "7365724c6973744e756d62657252756c654974656d496e666f480012560a" .
            "10737472696e675f72756c655f6974656d18032001280b323a2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e557365" .
            "724c697374537472696e6752756c654974656d496e666f480012520a0e64" .
            "6174655f72756c655f6974656d18042001280b32382e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e636f6d6d6f6e2e557365724c6973" .
            "744461746552756c654974656d496e666f4800420b0a0972756c655f6974" .
            "656d22ec010a18557365724c6973744461746552756c654974656d496e66" .
            "6f126e0a086f70657261746f7218012001280e325c2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e656e756d732e557365724c697374" .
            "4461746552756c654974656d4f70657261746f72456e756d2e557365724c" .
            "6973744461746552756c654974656d4f70657261746f72122b0a0576616c" .
            "756518022001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512330a0e6f66667365745f696e5f6461797318032001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "6522bd010a1a557365724c6973744e756d62657252756c654974656d496e" .
            "666f12720a086f70657261746f7218012001280e32602e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e656e756d732e557365724c6973" .
            "744e756d62657252756c654974656d4f70657261746f72456e756d2e5573" .
            "65724c6973744e756d62657252756c654974656d4f70657261746f72122b" .
            "0a0576616c756518022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756522bd010a1a557365724c69737453747269" .
            "6e6752756c654974656d496e666f12720a086f70657261746f7218012001" .
            "280e32602e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e557365724c697374537472696e6752756c654974656d4f7065" .
            "7261746f72456e756d2e557365724c697374537472696e6752756c654974" .
            "656d4f70657261746f72122b0a0576616c756518022001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756522a0020a18" .
            "436f6d62696e656452756c65557365724c697374496e666f12460a0c6c65" .
            "66745f6f706572616e6418012001280b32302e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e557365724c6973745275" .
            "6c65496e666f12470a0d72696768745f6f706572616e6418022001280b32" .
            "302e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d" .
            "6f6e2e557365724c69737452756c65496e666f12730a0d72756c655f6f70" .
            "657261746f7218032001280e325c2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e656e756d732e557365724c697374436f6d62696e65" .
            "6452756c654f70657261746f72456e756d2e557365724c697374436f6d62" .
            "696e656452756c654f70657261746f7222c0010a1c446174655370656369" .
            "66696352756c65557365724c697374496e666f123e0a0472756c65180120" .
            "01280b32302e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "636f6d6d6f6e2e557365724c69737452756c65496e666f12300a0a737461" .
            "72745f6461746518022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c7565122e0a08656e645f646174651803200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "65225c0a1a45787072657373696f6e52756c65557365724c697374496e66" .
            "6f123e0a0472756c6518012001280b32302e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e636f6d6d6f6e2e557365724c69737452756c" .
            "65496e666f22cd030a1552756c654261736564557365724c697374496e66" .
            "6f12780a14707265706f70756c6174696f6e5f7374617475731801200128" .
            "0e325a2e676f6f676c652e6164732e676f6f676c656164732e76312e656e" .
            "756d732e557365724c697374507265706f70756c6174696f6e5374617475" .
            "73456e756d2e557365724c697374507265706f70756c6174696f6e537461" .
            "747573125b0a17636f6d62696e65645f72756c655f757365725f6c697374" .
            "18022001280b32382e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e436f6d62696e656452756c65557365724c697374" .
            "496e666f480012640a1c646174655f73706563696669635f72756c655f75" .
            "7365725f6c69737418032001280b323c2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e446174655370656369666963" .
            "52756c65557365724c697374496e666f4800125f0a196578707265737369" .
            "6f6e5f72756c655f757365725f6c69737418042001280b323a2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e457870" .
            "72657373696f6e52756c65557365724c697374496e666f480042160a1472" .
            "756c655f62617365645f757365725f6c697374225d0a134c6f676963616c" .
            "557365724c697374496e666f12460a0572756c657318012003280b32372e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e" .
            "2e557365724c6973744c6f676963616c52756c65496e666f22da010a1755" .
            "7365724c6973744c6f676963616c52756c65496e666f126c0a086f706572" .
            "61746f7218012001280e325a2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e656e756d732e557365724c6973744c6f676963616c5275" .
            "6c654f70657261746f72456e756d2e557365724c6973744c6f676963616c" .
            "52756c654f70657261746f7212510a0d72756c655f6f706572616e647318" .
            "022003280b323a2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e636f6d6d6f6e2e4c6f676963616c557365724c6973744f706572616e" .
            "64496e666f224d0a1a4c6f676963616c557365724c6973744f706572616e" .
            "64496e666f122f0a09757365725f6c69737418012001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756522580a114261" .
            "736963557365724c697374496e666f12430a07616374696f6e7318012003" .
            "280b32322e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e557365724c697374416374696f6e496e666f229f010a1255" .
            "7365724c697374416374696f6e496e666f12390a11636f6e76657273696f" .
            "6e5f616374696f6e18012001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c75654800123a0a1272656d61726b6574696e" .
            "675f616374696f6e18022001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c7565480042120a10757365725f6c6973745f" .
            "616374696f6e42e9010a22636f6d2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e636f6d6d6f6e420e557365724c6973747350726f74" .
            "6f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f74" .
            "6f2f676f6f676c65617069732f6164732f676f6f676c656164732f76312f" .
            "636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e41" .
            "64732e476f6f676c654164732e56312e436f6d6d6f6eca021e476f6f676c" .
            "655c4164735c476f6f676c654164735c56315c436f6d6d6f6eea0222476f" .
            "6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a436f6d6d" .
            "6f6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

