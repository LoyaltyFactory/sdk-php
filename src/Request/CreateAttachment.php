<?php

namespace Easir\SDK\Request;

use Easir\SDK\Exception\RequestException;
use Easir\SDK\Request;
use Easir\SDK\Request\Model as RequestModel;
use Easir\SDK\Request\Model\CreateAttachment as CreateAttachmentModel;
use Easir\SDK\Model\Attachment;

class CreateAttachment extends Request
{
    /**
     * @var string
     */
    protected $url = '/filemanager/files/%s';
    /**
     * @var string
     */
    public $method = 'POST';
    /**
     * @var string
     */
    public $responseClass = Attachment::class;
    /**
     * @var string
     */
    protected $modelClass = CreateAttachmentModel::class;
    /**
     * @var array
     */
    public $options = ['header' => ['Content-Type' => 'multipart/form-data']];

    /**
     * @param RequestModel|null $model
     * @throws RequestException
     */
    public function __construct(RequestModel $model = null)
    {
        $this->checkModel();

        parent::__construct($model);

        $this->options['multipart'][] = [
            'name' => $model->name,
            'contents' => $model->contents,
            'filename' => $model->filename,
        ];
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return sprintf(parent::getUrl(), (string)$this->model->belongs_to);
    }
}
