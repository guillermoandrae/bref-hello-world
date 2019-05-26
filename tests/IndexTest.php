<?php declare(strict_types=1);

namespace GuillermoandraeTest;

use Aws\Lambda\LambdaClient;
use PHPUnit\Framework\TestCase;

final class BrefHelloWorldTest extends TestCase
{
    /**
     * @var LambdaClient
     */
    private $lambda;
    
    public function testWithNoEvent()
    {
        $this->assertSame('Hello, world!', $this->invokeLambda());
    }

    public function testWithEventWithName()
    {
        $this->assertSame('Hello, John!', $this->invokeLambda([
            'name' => 'John'
        ]));
    }

    protected function setUp(): void
    {
        $this->lambda = new LambdaClient([
            'version' => 'latest',
            'region' => 'us-east-1'
        ]);
        parent::setUp();
    }

    private function invokeLambda(array $payload = null): string
    {
        $params = [
            'FunctionName' => 'bref-hello-world',
            'InvocationType' => 'RequestResponse',
            'LogType' => 'None'
        ];
        if ($payload) {
            $params['Payload'] = json_encode($payload);
        }
        $result = $this->lambda->invoke($params);
        return json_decode($result->get('Payload')->getContents(), true);
    }
}
