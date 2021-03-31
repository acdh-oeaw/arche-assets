import json
import pkg_resources


def get_formats():
    """ returns a list dicts providing info about file formats and mime types

    :return: list dicts providing info about file formats and mime types
    :rtype: list

    """
    return json.loads(pkg_resources.resource_string(__name__, 'formats.json'))
