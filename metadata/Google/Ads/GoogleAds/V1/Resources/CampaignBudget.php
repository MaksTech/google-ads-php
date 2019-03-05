<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign_budget.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class CampaignBudget
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\BudgetDeliveryMethod::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\BudgetPeriod::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\BudgetStatus::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad50c0a37676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f63616d706169676e5f6275646765742e70726f746f" .
            "1221676f6f676c652e6164732e676f6f676c656164732e76312e7265736f" .
            "75726365731a31676f6f676c652f6164732f676f6f676c656164732f7631" .
            "2f656e756d732f6275646765745f706572696f642e70726f746f1a31676f" .
            "6f676c652f6164732f676f6f676c656164732f76312f656e756d732f6275" .
            "646765745f7374617475732e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170" .
            "692f616e6e6f746174696f6e732e70726f746f22c7080a0e43616d706169" .
            "676e42756467657412150a0d7265736f757263655f6e616d651801200128" .
            "0912270a02696418032001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c7565122a0a046e616d6518042001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512320a0d" .
            "616d6f756e745f6d6963726f7318052001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c756512380a13746f74616c5f616d" .
            "6f756e745f6d6963726f73180a2001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c7565124c0a0673746174757318062001" .
            "280e323c2e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e427564676574537461747573456e756d2e4275646765745374" .
            "6174757312650a0f64656c69766572795f6d6574686f6418072001280e32" .
            "4c2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d" .
            "732e42756467657444656c69766572794d6574686f64456e756d2e427564" .
            "67657444656c69766572794d6574686f6412350a116578706c696369746c" .
            "795f73686172656418082001280b321a2e676f6f676c652e70726f746f62" .
            "75662e426f6f6c56616c756512340a0f7265666572656e63655f636f756e" .
            "7418092001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565123a0a166861735f7265636f6d6d656e6465645f62756467" .
            "6574180b2001280b321a2e676f6f676c652e70726f746f6275662e426f6f" .
            "6c56616c756512450a207265636f6d6d656e6465645f6275646765745f61" .
            "6d6f756e745f6d6963726f73180c2001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c7565124c0a06706572696f64180d20" .
            "01280e323c2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "656e756d732e427564676574506572696f64456e756d2e42756467657450" .
            "6572696f6412560a317265636f6d6d656e6465645f6275646765745f6573" .
            "74696d617465645f6368616e67655f7765656b6c795f636c69636b73180e" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c7565125b0a367265636f6d6d656e6465645f6275646765745f65737469" .
            "6d617465645f6368616e67655f7765656b6c795f636f73745f6d6963726f" .
            "73180f2001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565125c0a377265636f6d6d656e6465645f6275646765745f65" .
            "7374696d617465645f6368616e67655f7765656b6c795f696e7465726163" .
            "74696f6e7318102001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c756512550a307265636f6d6d656e6465645f62756467" .
            "65745f657374696d617465645f6368616e67655f7765656b6c795f766965" .
            "777318112001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c75654280020a25636f6d2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e7265736f7572636573421343616d706169676e42" .
            "756467657450726f746f50015a4a676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f67" .
            "6c656164732f76312f7265736f75726365733b7265736f7572636573a202" .
            "03474141aa0221476f6f676c652e4164732e476f6f676c654164732e5631" .
            "2e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c65" .
            "4164735c56315c5265736f7572636573ea0225476f6f676c653a3a416473" .
            "3a3a476f6f676c654164733a3a56313a3a5265736f757263657362067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

