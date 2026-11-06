<?php
declare(strict_types=1);

namespace Meetbot\OpenApi\Model;

class ConversionEvent extends AbstractModel
{
    protected const FIELDS = [
        'eventName' => ['event_name', 'String'],
        'eventTime' => ['event_time', 'Long'],
        'eventId' => ['event_id', 'String'],
        'eventSourceUrl' => ['event_source_url', 'String'],
        'actionSource' => ['action_source', 'String'],
        'optOut' => ['opt_out', 'Boolean'],
        'userData' => ['user_data', 'ConversionUserData'],
        'customData' => ['custom_data', 'ConversionCustomData'],
        'dataProcessingOptions' => ['data_processing_options', 'List<String>'],
        'dataProcessingOptionsCountry' => ['data_processing_options_country', 'Integer'],
        'dataProcessingOptionsState' => ['data_processing_options_state', 'Integer'],
    ];

    /** @return string|null */
    public function getEventName(): mixed { return $this->get('eventName'); }
    /** @param string|null $value */
    public function setEventName(mixed $value): void { $this->set('eventName', $value); }
    /** @param string|null $value */
    public function eventName(mixed $value): static { return $this->set('eventName', $value); }

    /** @return int|string|null */
    public function getEventTime(): mixed { return $this->get('eventTime'); }
    /** @param int|string|null $value */
    public function setEventTime(mixed $value): void { $this->set('eventTime', $value); }
    /** @param int|string|null $value */
    public function eventTime(mixed $value): static { return $this->set('eventTime', $value); }

    /** @return string|null */
    public function getEventId(): mixed { return $this->get('eventId'); }
    /** @param string|null $value */
    public function setEventId(mixed $value): void { $this->set('eventId', $value); }
    /** @param string|null $value */
    public function eventId(mixed $value): static { return $this->set('eventId', $value); }

    /** @return string|null */
    public function getEventSourceUrl(): mixed { return $this->get('eventSourceUrl'); }
    /** @param string|null $value */
    public function setEventSourceUrl(mixed $value): void { $this->set('eventSourceUrl', $value); }
    /** @param string|null $value */
    public function eventSourceUrl(mixed $value): static { return $this->set('eventSourceUrl', $value); }

    /** @return string|null */
    public function getActionSource(): mixed { return $this->get('actionSource'); }
    /** @param string|null $value */
    public function setActionSource(mixed $value): void { $this->set('actionSource', $value); }
    /** @param string|null $value */
    public function actionSource(mixed $value): static { return $this->set('actionSource', $value); }

    /** @return bool|null */
    public function getOptOut(): mixed { return $this->get('optOut'); }
    /** @param bool|null $value */
    public function setOptOut(mixed $value): void { $this->set('optOut', $value); }
    /** @param bool|null $value */
    public function optOut(mixed $value): static { return $this->set('optOut', $value); }

    /** @return \Meetbot\OpenApi\Model\ConversionUserData|null */
    public function getUserData(): mixed { return $this->get('userData'); }
    /** @param \Meetbot\OpenApi\Model\ConversionUserData|null $value */
    public function setUserData(mixed $value): void { $this->set('userData', $value); }
    /** @param \Meetbot\OpenApi\Model\ConversionUserData|null $value */
    public function userData(mixed $value): static { return $this->set('userData', $value); }

    /** @return \Meetbot\OpenApi\Model\ConversionCustomData|null */
    public function getCustomData(): mixed { return $this->get('customData'); }
    /** @param \Meetbot\OpenApi\Model\ConversionCustomData|null $value */
    public function setCustomData(mixed $value): void { $this->set('customData', $value); }
    /** @param \Meetbot\OpenApi\Model\ConversionCustomData|null $value */
    public function customData(mixed $value): static { return $this->set('customData', $value); }

    /** @return list<string>|null */
    public function getDataProcessingOptions(): mixed { return $this->get('dataProcessingOptions'); }
    /** @param list<string>|null $value */
    public function setDataProcessingOptions(mixed $value): void { $this->set('dataProcessingOptions', $value); }
    /** @param list<string>|null $value */
    public function dataProcessingOptions(mixed $value): static { return $this->set('dataProcessingOptions', $value); }

    /** @return int|null */
    public function getDataProcessingOptionsCountry(): mixed { return $this->get('dataProcessingOptionsCountry'); }
    /** @param int|null $value */
    public function setDataProcessingOptionsCountry(mixed $value): void { $this->set('dataProcessingOptionsCountry', $value); }
    /** @param int|null $value */
    public function dataProcessingOptionsCountry(mixed $value): static { return $this->set('dataProcessingOptionsCountry', $value); }

    /** @return int|null */
    public function getDataProcessingOptionsState(): mixed { return $this->get('dataProcessingOptionsState'); }
    /** @param int|null $value */
    public function setDataProcessingOptionsState(mixed $value): void { $this->set('dataProcessingOptionsState', $value); }
    /** @param int|null $value */
    public function dataProcessingOptionsState(mixed $value): static { return $this->set('dataProcessingOptionsState', $value); }
}
