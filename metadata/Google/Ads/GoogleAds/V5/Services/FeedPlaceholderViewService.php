<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/feed_placeholder_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V5\Services;

class FeedPlaceholderViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adc050a34676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f706c616365686f6c6465725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732290030a13506c616365686f6c64657254797065456e756d22f8020a0f506c616365686f6c64657254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a08534954454c494e4b100212080a0443414c4c100312070a034150501004120c0a084c4f434154494f4e100512160a12414646494c494154455f4c4f434154494f4e1006120b0a0743414c4c4f5554100712160a12535452554354555245445f534e49505045541008120b0a074d455353414745100912090a055052494345100a120d0a0950524f4d4f54494f4e100b12110a0d41445f435553544f4d495a4552100c12150a1144594e414d49435f454455434154494f4e100d12120a0e44594e414d49435f464c49474854100e12120a0e44594e414d49435f435553544f4d100f12110a0d44594e414d49435f484f54454c101012170a1344594e414d49435f5245414c5f455354415445101112120a0e44594e414d49435f54524156454c101212110a0d44594e414d49435f4c4f43414c1013120f0a0b44594e414d49435f4a4f42101442e9010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d734214506c616365686f6c6465725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330a8a060a3d676f6f676c652f6164732f676f6f676c656164732f76352f7265736f75726365732f666565645f706c616365686f6c6465725f766965772e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22bb020a1346656564506c616365686f6c64657256696577124b0a0d7265736f757263655f6e616d651801200128094234e04103fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f46656564506c616365686f6c6465725669657712610a10706c616365686f6c6465725f7479706518022001280e32422e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e506c616365686f6c64657254797065456e756d2e506c616365686f6c646572547970654203e041033a74ea41710a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f46656564506c616365686f6c646572566965771241637573746f6d6572732f7b637573746f6d65727d2f66656564506c616365686f6c64657256696577732f7b666565645f706c616365686f6c6465725f766965777d4285020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f7572636573421846656564506c616365686f6c6465725669657750726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56352e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56355c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a5265736f7572636573620670726f746f330afa060a44676f6f676c652f6164732f676f6f676c656164732f76352f73657276696365732f666565645f706c616365686f6c6465725f766965775f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f226c0a1d47657446656564506c616365686f6c6465725669657752657175657374124b0a0d7265736f757263655f6e616d651801200128094234e04102fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f46656564506c616365686f6c64657256696577329d020a1a46656564506c616365686f6c646572566965775365727669636512e1010a1647657446656564506c616365686f6c64657256696577123f2e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e47657446656564506c616365686f6c64657256696577526571756573741a362e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e46656564506c616365686f6c64657256696577224e82d3e493023812362f76352f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f66656564506c616365686f6c64657256696577732f2a7dda410d7265736f757263655f6e616d651a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4286020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e7365727669636573421f46656564506c616365686f6c646572566965775365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56352e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56355c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

