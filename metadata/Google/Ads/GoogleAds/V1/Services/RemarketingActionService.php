<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/remarketing_action_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class RemarketingActionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\RemarketingAction::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afe0c0a41676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f72656d61726b6574696e675f616374696f6e5f736572" .
            "766963652e70726f746f1220676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e73657276696365731a1c676f6f676c652f6170692f616e6e" .
            "6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275" .
            "662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f77726170706572732e70726f746f1a17676f6f676c652f72" .
            "70632f7374617475732e70726f746f22340a1b47657452656d61726b6574" .
            "696e67416374696f6e5265717565737412150a0d7265736f757263655f6e" .
            "616d6518012001280922b8010a1f4d757461746552656d61726b6574696e" .
            "67416374696f6e735265717565737412130a0b637573746f6d65725f6964" .
            "18012001280912500a0a6f7065726174696f6e7318022003280b323c2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e73657276696365" .
            "732e52656d61726b6574696e67416374696f6e4f7065726174696f6e1217" .
            "0a0f7061727469616c5f6661696c75726518032001280812150a0d76616c" .
            "69646174655f6f6e6c7918042001280822ea010a1a52656d61726b657469" .
            "6e67416374696f6e4f7065726174696f6e122f0a0b7570646174655f6d61" .
            "736b18042001280b321a2e676f6f676c652e70726f746f6275662e466965" .
            "6c644d61736b12460a0663726561746518012001280b32342e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e7265736f75726365732e52" .
            "656d61726b6574696e67416374696f6e480012460a067570646174651802" .
            "2001280b32342e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e7265736f75726365732e52656d61726b6574696e67416374696f6e4800" .
            "420b0a096f7065726174696f6e22a7010a204d757461746552656d61726b" .
            "6574696e67416374696f6e73526573706f6e736512310a15706172746961" .
            "6c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c65" .
            "2e7270632e53746174757312500a07726573756c747318022003280b323f" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4d757461746552656d61726b6574696e67416374696f6e526573" .
            "756c7422360a1d4d757461746552656d61726b6574696e67416374696f6e" .
            "526573756c7412150a0d7265736f757263655f6e616d6518012001280932" .
            "ce030a1852656d61726b6574696e67416374696f6e5365727669636512c9" .
            "010a1447657452656d61726b6574696e67416374696f6e123d2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e73657276696365732e47" .
            "657452656d61726b6574696e67416374696f6e526571756573741a342e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e7265736f757263" .
            "65732e52656d61726b6574696e67416374696f6e223c82d3e49302361234" .
            "2f76312f7b7265736f757263655f6e616d653d637573746f6d6572732f2a" .
            "2f72656d61726b6574696e67416374696f6e732f2a7d12e5010a184d7574" .
            "61746552656d61726b6574696e67416374696f6e7312412e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e73657276696365732e4d7574" .
            "61746552656d61726b6574696e67416374696f6e73526571756573741a42" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7365727669" .
            "6365732e4d757461746552656d61726b6574696e67416374696f6e735265" .
            "73706f6e7365224282d3e493023c22372f76312f637573746f6d6572732f" .
            "7b637573746f6d65725f69643d2a7d2f72656d61726b6574696e67416374" .
            "696f6e733a6d75746174653a012a4284020a24636f6d2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e7365727669636573421d52656d" .
            "61726b6574696e67416374696f6e5365727669636550726f746f50015a48" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76312f7365727669" .
            "6365733b7365727669636573a20203474141aa0220476f6f676c652e4164" .
            "732e476f6f676c654164732e56312e5365727669636573ca0220476f6f67" .
            "6c655c4164735c476f6f676c654164735c56315c5365727669636573ea02" .
            "24476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a53" .
            "65727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

