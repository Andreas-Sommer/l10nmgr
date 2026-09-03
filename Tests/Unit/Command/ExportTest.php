<?php

declare(strict_types=1);

namespace Localizationteam\L10nmgr\Tests\Unit\Command;

use Localizationteam\L10nmgr\Command\Export;
use Localizationteam\L10nmgr\Model\Dto\EmConfiguration;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class ExportTest extends UnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $GLOBALS['LANG'] = $this->createMock(LanguageService::class);
    }

    public function testOnlyForcedSourceLanguageOptionIsConfigured(): void
    {
        $command = new Export(new EmConfiguration(['enable_notification' => false]));

        self::assertTrue($command->getDefinition()->hasOption('onlyForcedSourceLanguage'));
    }
}
