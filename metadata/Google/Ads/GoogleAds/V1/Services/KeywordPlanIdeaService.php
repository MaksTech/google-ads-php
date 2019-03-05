<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_idea_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class KeywordPlanIdeaService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\KeywordPlanCommon::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\KeywordPlanNetwork::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abe0d0a40676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6b6579776f72645f706c616e5f696465615f73657276" .
            "6963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365731a38676f6f676c652f6164732f676f6f67" .
            "6c656164732f76312f656e756d732f6b6579776f72645f706c616e5f6e65" .
            "74776f726b2e70726f746f1a1c676f6f676c652f6170692f616e6e6f7461" .
            "74696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f77" .
            "726170706572732e70726f746f22e9030a1b47656e65726174654b657977" .
            "6f726449646561735265717565737412130a0b637573746f6d65725f6964" .
            "180120012809122e0a086c616e677561676518072001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c7565123a0a146765" .
            "6f5f7461726765745f636f6e7374616e747318082003280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512660a146b65" .
            "79776f72645f706c616e5f6e6574776f726b18092001280e32482e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e656e756d732e4b6579" .
            "776f7264506c616e4e6574776f726b456e756d2e4b6579776f7264506c61" .
            "6e4e6574776f726b12530a146b6579776f72645f616e645f75726c5f7365" .
            "656418022001280b32332e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365732e4b6579776f7264416e6455726c536565" .
            "64480012450a0c6b6579776f72645f7365656418032001280b322d2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7365727669636573" .
            "2e4b6579776f7264536565644800123d0a0875726c5f7365656418052001" .
            "280b32292e676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365732e55726c53656564480042060a0473656564226e0a114b" .
            "6579776f7264416e6455726c5365656412290a0375726c18012001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "2e0a086b6579776f72647318022003280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565223d0a0b4b6579776f72645365" .
            "6564122e0a086b6579776f72647318012003280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756522340a0755726c536565" .
            "6412290a0375726c18012001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c7565226b0a1b47656e65726174654b657977" .
            "6f726449646561526573706f6e7365124c0a07726573756c747318012003" .
            "280b323b2e676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365732e47656e65726174654b6579776f726449646561526573" .
            "756c7422a3010a1947656e65726174654b6579776f726449646561526573" .
            "756c74122a0a047465787418022001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565125a0a146b6579776f72645f69" .
            "6465615f6d65747269637318032001280b323c2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e636f6d6d6f6e2e4b6579776f7264506c" .
            "616e486973746f726963616c4d65747269637332ee010a164b6579776f72" .
            "64506c616e496465615365727669636512d3010a1447656e65726174654b" .
            "6579776f72644964656173123d2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e73657276696365732e47656e65726174654b6579776f" .
            "72644964656173526571756573741a3d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e73657276696365732e47656e65726174654b65" .
            "79776f726449646561526573706f6e7365223d82d3e493023722322f7631" .
            "2f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a67656e" .
            "65726174654b6579776f726449646561733a012a4282020a24636f6d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e73657276696365" .
            "73421b4b6579776f7264506c616e496465615365727669636550726f746f" .
            "50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f6164732f676f6f676c656164732f76312f73" .
            "657276696365733b7365727669636573a20203474141aa0220476f6f676c" .
            "652e4164732e476f6f676c654164732e56312e5365727669636573ca0220" .
            "476f6f676c655c4164735c476f6f676c654164735c56315c536572766963" .
            "6573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56" .
            "313a3a5365727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

