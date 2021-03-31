import unittest
from AcdhArcheAssets.file_formats import get_formats


class TestNormalizer(unittest.TestCase):
    def test__001_load_list(self):
        items = get_formats()
        self.assertEqual(type(items), list, "should be type 'list' ")
