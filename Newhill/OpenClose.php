<?php
interface LoggerContract
{
    public function __construct(FormatContract $format, DeliverContract $delivery);
}

class Logger implements LoggerContract
{
    public function __construct(protected FormatContract $format, protected DeliverContract $delivery){}

    public function log(string $string)
    {
        $this->delivery->makeDeliver($this->format->convertToFormat($string));
    }
}

interface DeliverContract
{
    public function makeDeliver(string $text);
}

class EmailDelivery implements DeliverContract
{

    public function makeDeliver(string $text)
    {
        echo "Вывод формата ({$text}) по имейл";
    }
}

class SmsDelivery implements DeliverContract
{

    public function makeDeliver(string $text)
    {
        echo "Вывод формата ({$text}) по sms";
    }
}

class ConsoleDelivery implements DeliverContract
{

    public function makeDeliver(string $text)
    {
        echo "Вывод формата ({$text}) в консоли";
    }
}

interface FormatContract
{
    public function convertToFormat(string $text): string;
}

class RawFormat implements FormatContract
{
    public function convertToFormat(string $text): string
    {
        return $text;
    }
}

class DateFormat implements FormatContract
{
    public function convertToFormat(string $text): string
    {
        return date('Y-m-d H:i:s') . $text;
    }
}

class DateAndDetailsFormat implements FormatContract
{
    public function convertToFormat(string $text): string
    {
        return date('Y-m-d H:i:s') . $text . ' - With some details';
    }
}

$formatsClasses = [
    'raw' => RawFormat::class,
    'date' => DateFormat::class,
    'date_and_details' => DateAndDetailsFormat::class
];

$deliveryClasses = [
    'email' => EmailDelivery::class,
    'sms' => SmsDelivery::class,
    'console' => ConsoleDelivery::class
];

$format = new $formatsClasses['date_and_details'];
$delivery = new $deliveryClasses['email'];

$logger = new Logger($format, $delivery);
$logger->log('Emergency error! Please fix me!');